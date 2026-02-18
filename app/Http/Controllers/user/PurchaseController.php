<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Purchase;
use App\Models\Rebate;
use App\Models\User;
use App\Models\UserLedger;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function purchaseConfirmation($id)
    {
        
        session()->put('pop', true);
        
        $package = Package::find($id);
        $user = Auth::user();
        $rebate = Rebate::first();

        //Check status
        if ($package->status != 'active')
        {
            return back()->with('error', "In-Active");
        }

        //Maintained vip rules
        $userPackagePurchasedOrNot = Purchase::where('user_id', $user->id)->where('tab', 'vip')->first();
        if (!$userPackagePurchasedOrNot && $package->tab != 'vip'){
            return back()->with('error', "Wrong plan chooses");
        }


        if ($package->tab != 'vip'){
            //Search parent package from purchase table using package_id
            $getPurchaseWithParentPackage = Purchase::where('package_id', $package->package_id)->orderByDesc('id')->first();

            if (!$getPurchaseWithParentPackage){
                return back()->with('error', "You can't jump vip");
            }
        }

//return 'ok';

        if ($package){
            if ($package->price <= $user->deposit_balance){
                User::where('id', $user->id)->update([
                    'deposit_balance'=> $user->deposit_balance - $package->price,
                    'package_tab'=> $package->tab,
                ]);

                //Purchase Table Create
                $purchase = new Purchase();
                $purchase->user_id = Auth::id();
                $purchase->package_id = $package->id;
                $purchase->tab = $package->tab;
                $purchase->amount = $package->price;
                $purchase->hourly = ($package->commission_with_avg_amount / $package->validity) / 24;
                $purchase->daily_income = $package->commission_with_avg_amount / $package->validity;
                $purchase->return_total = $package->commission_with_avg_amount;
                $purchase->date = now()->addHours(24);
                $purchase->validity = now()->addDays($package->validity);
                $purchase->status = 'active';
                $purchase->save();

                $first_ref = User::where('ref_id', Auth::user()->ref_by)->first();
                if ($first_ref){
                    $amount = $package->price * $package->ref1 / 100;
                    User::where('id', $first_ref->id)->update([
                        'balance' => $first_ref->balance + $amount
                    ]);

                    $ledger = new UserLedger();
                    $ledger->user_id = $first_ref->id;
                    $ledger->get_balance_from_user_id = $user->id;
                    $ledger->reason = 'commission';
                    $ledger->perticulation = 'First Level Commission Received';
                    $ledger->amount = $amount;
                    $ledger->debit = $amount;
                    $ledger->status = 'approved';
                    $ledger->step = 'first';
                    $ledger->date = date('d-m-Y H:i');
                    $ledger->save();

                    $second_ref = User::where('ref_id', $first_ref->ref_by)->first();
                    if ($second_ref){
                        $amount = $package->price * $package->ref2 / 100;
                        User::where('id', $second_ref->id)->update([
                            'balance' => $second_ref->balance + $amount
                        ]);

                        $ledger = new UserLedger();
                        $ledger->user_id = $second_ref->id;
                        $ledger->get_balance_from_user_id = $user->id;
                        $ledger->reason = 'commission';
                        $ledger->perticulation = 'Second Level Commission Received';
                        $ledger->amount = $amount;
                        $ledger->debit = $amount;
                        $ledger->status = 'approved';
                        $ledger->step = 'second';
                        $ledger->date = date('d-m-Y H:i');
                        $ledger->save();

                        $third_ref = User::where('ref_id', $second_ref->ref_by)->first();
                        if ($third_ref){
                            $amount = $package->price * $package->ref3 / 100;
                            User::where('id', $third_ref->id)->update([
                                'balance' => $third_ref->balance + $amount
                            ]);

                            $ledger = new UserLedger();
                            $ledger->user_id = $third_ref->id;
                            $ledger->get_balance_from_user_id = $user->id;
                            $ledger->reason = 'commission';
                            $ledger->perticulation = 'Third Level Commission Received';
                            $ledger->amount = $amount;
                            $ledger->debit = $amount;
                            $ledger->status = 'approved';
                            $ledger->step = 'third';
                            $ledger->date = date('d-m-Y H:i');
                            $ledger->save();
                        }
                    }
                }

                return redirect()->back()->with('success', "Product Buy Successful.");
            }else{
                return back()->with('error', "Deposit balance too low");
            }
        }else{
            return back()->with('error', "This is default vip");
        }
    }


    public function vip_confirm($vip_id)
    {
        $vip = Package::find($vip_id);
        return view('app.main.vip_confirm', compact('vip'));
    }

    protected function ref_user($ref_by)
    {
        return User::where('ref_id', $ref_by)->first();
    }
}
