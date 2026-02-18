<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Rebate;
use App\Models\User;
use App\Models\Purchase;
use App\Models\UserLedger;
use Illuminate\Support\Facades\Auth;

class MiningController extends Controller
{
    public function running_mining()
    {
        return view('app.main.order.order');
    }

    public function start_mining($pack_id){
        $parchase = Purchase::where('package_id', $pack_id)->where('user_id', \auth()->id())->where('status', 'active')->orderByDesc('id')->first();
        if ($parchase){
            $parchase->running_status = 'running';
            $parchase->save();
        }
        return back();
    }


//    public function received_amount()
//    {
//        $user = Auth::user();
//        $rebate = Rebate::first();
//
//        if ($user->receive_able_amount > 0){
//            $uu = User::where('id', $user->id)->first();
//            $uu->balance = $user->balance + $user->receive_able_amount;
//
//            $ledger = new UserLedger();
//            $ledger->user_id = $user->id;
//            $ledger->reason = 'daily_income';
//            $ledger->perticulation = 'Package commission Received.';
//            $ledger->amount = $user->receive_able_amount;
//            $ledger->credit = $user->receive_able_amount;
//            $ledger->status = 'approved';
//            $ledger->date = date("Y-m-d H:i:s");
//            $ledger->save();
//
//
//            $first_ref = User::where('ref_id', Auth::user()->ref_by)->first();
//            if ($first_ref){
//                $amount = $user->receive_able_amount * $rebate->interest_commission1 / 100;
//                User::where('id', $first_ref->id)->update([
//                    'balance' => $first_ref->balance + $amount
////                    'interest_cumulative_balance' => $first_ref->interest_cumulative_balance + $amount
//                ]);
//
//                $ledger = new UserLedger();
//                $ledger->user_id = $first_ref->id;
//                $ledger->reason = 'reword';
//                $ledger->perticulation = 'Interest LV(1) Commission';
//                $ledger->amount = $amount;
//                $ledger->debit = $amount;
//                $ledger->status = 'approved';
//                $ledger->step = 'first';
//                $ledger->date = date('d-m-Y H:i');
//                $ledger->save();
//
//                $second_ref = User::where('ref_id', $first_ref->ref_by)->first();
//                if ($second_ref){
//                    $amount = $user->receive_able_amount * $rebate->interest_commission2 / 100;
//                    User::where('id', $second_ref->id)->update([
//                        'balance' => $second_ref->balance + $amount
////                        'interest_cumulative_balance' => $second_ref->interest_cumulative_balance + $amount
//                    ]);
//
//                    $ledger = new UserLedger();
//                    $ledger->user_id = $second_ref->id;
//                    $ledger->reason = 'reword';
//                    $ledger->perticulation = 'Interest LV(2) Commission';
//                    $ledger->amount = $amount;
//                    $ledger->debit = $amount;
//                    $ledger->status = 'approved';
//                    $ledger->step = 'second';
//                    $ledger->date = date('d-m-Y H:i');
//                    $ledger->save();
//
//                    $third_ref = User::where('ref_id', $second_ref->ref_by)->first();
//                    if ($third_ref){
//                        $amount = $user->receive_able_amount * $rebate->interest_commission3 / 100;
//                        User::where('id', $third_ref->id)->update([
//                            'balance' => $third_ref->balance + $amount
////                            'interest_cumulative_balance' => $third_ref->interest_cumulative_balance + $amount
//                        ]);
//
//                        $ledger = new UserLedger();
//                        $ledger->user_id = $third_ref->id;
//                        $ledger->reason = 'reword';
//                        $ledger->perticulation = 'Interest LV(3) Commission';
//                        $ledger->amount = $amount;
//                        $ledger->debit = $amount;
//                        $ledger->status = 'approved';
//                        $ledger->step = 'third';
//                        $ledger->date = date('d-m-Y H:i');
//                        $ledger->save();
//                    }
//                }
//            }
//
//
//            $uu->receive_able_amount = 0;
//            $uu->save();
//
//            return redirect()->back()->with('success', 'My Commission Received.'.price($uu->receive_able_amount));
//        }else{
//            return redirect()->back()->with('error', 'Commission not added yet.');
//        }
//    }


//    public function received_tareget_registered()
//    {
//        $user = Auth::user();
//        $first_level_users = User::where('ref_by', auth()->user()->ref_id)->count();
//        if($first_level_users >= setting('total_member_register_reword')){
//            if ($user->reword_balance > 0){
//                $user->balance = $user->balance + $user->reword_balance;
//
//                $ledger = new UserLedger();
//                $ledger->user_id = $user->id;
//                $ledger->reason = 'reword';
//                $ledger->perticulation = 'Invite Register Reword';
//                $ledger->amount = $user->reword_balance;
//                $ledger->debit = $user->reword_balance;
//                $ledger->status = 'approved';
//                $ledger->date = date('d-m-Y H:i');
//                $ledger->save();
//
//                $user->reword_balance = 0;
//                $user->save();
//
//                return response()->json(['status'=>true, 'message'=>'Congratulations. you have received reword.', 'reword'=> price($user->reword_balance)]);
//            }else{
//                return response()->json(['status'=>false, 'message'=>'Already received '.setting('total_member_register_reword'). 'member reword.', 'reword'=> price($user->reword_balance)]);
//            }
//        }else{
//            return response()->json(['status'=>false, 'message'=>'Not yet ready for received reword.', 'reword'=> price($user->reword_balance)]);
//        }
//    }


//    public function received_invest_commission()
//    {
//        $user = Auth::user();
//        if ($user->invest_cumulative_balance > 0){
//            $user->balance = $user->balance + $user->invest_cumulative_balance;
//            $user->invest_cumulative_balance_received = $user->invest_cumulative_balance_received + $user->invest_cumulative_balance;
//
//            $ledger = new UserLedger();
//            $ledger->user_id = $user->id;
//            $ledger->reason = 'reword';
//            $ledger->perticulation = 'Invest commission received.';
//            $ledger->amount = $user->invest_cumulative_balance;
//            $ledger->debit = $user->invest_cumulative_balance;
//            $ledger->status = 'approved';
//            $ledger->date = date('d-m-Y H:i');
//            $ledger->save();
//
//            $user->invest_cumulative_balance = 0;
//            $user->save();
//
//            return response()->json(['status'=>true, 'message'=>'Congratulations. you have received invest commission.', 'invest_balance'=> price($user->invest_cumulative_balance), 'cumulative'=> price($user->invest_cumulative_balance_received)]);
//        }else{
//            return response()->json(['status'=>false, 'message'=>'Receivable amount not eligible ', 'invest_balance'=> price($user->invest_cumulative_balance), 'cumulative'=> price($user->invest_cumulative_balance_received)]);
//        }
//    }


//    public function received_interest_commission()
//    {
//        $user = Auth::user();
//        if ($user->interest_cumulative_balance > 0){
//            $user->balance = $user->balance + $user->interest_cumulative_balance;
//            $user->interest_cumulative_balance_received = $user->interest_cumulative_balance_received + $user->interest_cumulative_balance;
//
//            $ledger = new UserLedger();
//            $ledger->user_id = $user->id;
//            $ledger->reason = 'reword';
//            $ledger->perticulation = 'Interest commission received.';
//            $ledger->amount = $user->interest_cumulative_balance;
//            $ledger->debit = $user->interest_cumulative_balance;
//            $ledger->status = 'approved';
//            $ledger->date = date('d-m-Y H:i');
//            $ledger->save();
//
//            $user->interest_cumulative_balance = 0;
//            $user->save();
//
//            return response()->json(['status'=>true, 'message'=>'Congratulations. you have received invest commission.', 'interest_receive_balance'=> price($user->interest_cumulative_balance), 'interest_received_balance'=> price($user->interest_cumulative_balance_received)]);
//        }else{
//            return response()->json(['status'=>false, 'message'=>'Receivable amount not eligible ', 'interest_receive_balance'=> price($user->interest_cumulative_balance), 'interest_received_balance'=> price($user->interest_cumulative_balance_received)]);
//        }
//    }

    public function process()
    {
        return view('app.main.order.process');
    }
}








