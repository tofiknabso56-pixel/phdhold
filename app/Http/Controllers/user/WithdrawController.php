<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\User;
use App\Models\UserLedger;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Deposit;
use App\Models\Purchase;
use Carbon\Carbon;

class WithdrawController extends Controller
{
    public function withdraw()
    {
//        \auth()->user()->gateway_method && \auth()->user()->gateway_number
        if (auth()->user()->gateway_method && \auth()->user()->gateway_number) {
            return view('app.main.withdraw.index');
        } else {
            return redirect('add-bank-create')->with('success', 'Create bank');
        }

    }

    public function withdraw_history()
    {
        return view('app.main.withdraw_history');
    }

    public function withdrawRequest(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'amount' => 'required|numeric',
        ]);

        $current_time = Carbon::now('Asia/Dhaka');
        $start = 10; //Eg. start hour 10PM
        $end = 17;  //Eg. end hour 5AM
        $now = Carbon::now('Asia/Dhaka');

        if(setting('w_time_status') == 'inactive'){
            return redirect()->back()->with('error', 'Withdraw time 10AM to 5PM');
        }

        if ($request->amount == null){
            return redirect()->back()->with('error', 'Withdraw Amount Required.');
        }


        if (true) {
            $user = Auth::user();

            if ($validate->fails()) {
                return redirect()->back()->withErrors('errors', $validate->errors());
            }

            //Check user payment or not
//            $payments = Purchase::where('user_id', $user->id)->get();
//            if ($payments->count() < 1) {
//                return redirect()->back()->with('error', "Your ");
//            }
            if ($request->amount <= $user->balance) {
                if ($request->amount >= setting('minimum_withdraw')) {
                    if ($request->amount <= setting('maximum_withdraw')) {
                        $charge = 0;
                        if (setting('withdraw_charge') > 0) {
                            $charge = ($request->amount * setting('withdraw_charge')) / 100;
                        }


                        //Update User Balance
                        $balance = $user->balance - $request->amount;
                        User::where('id', $user->id)->update([
                            'balance' => $balance,
                        ]);

                        //Withdraw
                        $withdrawal = new Withdrawal();
                        $withdrawal->user_id = $user->id;
                        $withdrawal->method_name = $user->gateway_method;
                        $withdrawal->number = $user->gateway_number;
                        $withdrawal->amount = $request->amount;
                        $withdrawal->currency = 'Bangladesh';
                        $withdrawal->charge = $charge;
                        $withdrawal->oid = 'W-' . rand(000000, 999999) . rand(000000, 999999) . rand(000000, 999999);
                        $withdrawal->final_amount = $request->amount - $charge;
                        $withdrawal->status = 'pending';

                        //User Ledger
                        if ($withdrawal->save()) {
                            $ledger = new UserLedger();
                            $ledger->user_id = $user->id;
                            $ledger->reason = 'withdraw_request';
                            $ledger->perticulation = 'withdraw request status is pending';
                            $ledger->amount = $request->amount;
                            $ledger->debit = $request->amount - $charge;
                            $ledger->status = 'pending';
                            $ledger->date = date('d-m-Y H:i');
                            $ledger->save();
                        }
                        return redirect()->back()->with('success', "Withdraw sent Successfully");
                    } else {
                        return redirect()->back()->with('error', 'Less then ' . setting('maximum_withdraw'));
                    }
                } else {
                    return redirect()->back()->with('error', 'Greater then ' . setting('minimum_withdraw'));
                }
            } else {
                return redirect()->back()->with('error', 'Balance Low');
            }
        } else {
            return redirect()->back()->with('error', 'Withdraw time 8.00AM - 4.00PM');
        }
    }
}
