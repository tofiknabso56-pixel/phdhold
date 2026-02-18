<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OnepayController extends Controller
{
    public function return_number($type)
    {
        $number = DB::table('payment_methods')->where('type', $type)->where('status', 'active')->inRandomOrder()->first();
        if ($number){
            $number = $number->number;
            return response()->json(['status'=> true, 'number'=> $number, 'message'=> $type. 'Available']);
        }else{
            return response()->json(['status'=> false, 'message'=> $type. 'not processable. try again.']);
        }
    }
}
