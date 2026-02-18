<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationMail;
use App\Models\Admin;
use App\Models\Package;
use App\Models\Purchase;
use App\Models\User;
use App\Models\UserLedger;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use function GuzzleHttp\Promise\all;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request, $id=null)
    {
        if ($id){
            User::find($id)->delete();
        }
        $captcha_code = rand(00000,99999);

        $ref_by = $request->query('code');
        return view('app.auth.registration', compact('ref_by', 'captcha_code'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'phone' => ['required', 'numeric', 'unique:users,phone'],
            'ref_by' => ['required', 'string'],
            'password' => ['required'],
            'confirm_password' => ['required'],
            ],[
                'ref_by.required' => 'Refer code is required',
            ]);
        if ($validate->fails()){
            $user = User::where('phone', $request->phone)->first();
            if ($user){
                return back()->with('message', 'Phone number exist');
            }
            return back()->with('message', $validate->errors());
        }


        $getIp = \Request::ip();
//        $checkUserIp = DB::table('users')->where('ip', $getIp)->exists();
//        if ($checkUserIp){
//            return back()->with('message', 'Have an account your device.');
//        }

        //Refer Bonus
//        if ($request->ref_by){
//            $getUser = User::where('ref_id', $request->ref_by)->first();
//            if ($getUser){
//                $first_level_users = User::where('ref_by', $getUser->ref_id)->count();
//                if ($first_level_users <= setting('total_member_register_reword')){
//                    $getUser->reword_balance = $getUser->reword_balance + setting('total_member_register_reword_amount');
//                    $getUser->save();
//                }
//            }
//        }

        if ($request->password != $request->confirm_password){
            return back()->with('message', 'Confirm password not match.');
        }

        //Check refer code is next time edit
        $user = User::create([
            'name' => 'User'.rand(22,99),
            'username' => 'uname'.$request->phone,
            'ref_id' => $this->ref_code().$this->ref_code(),
            'ref_by' => $request->ref_by ?? User::first()->ref_id,
            'email' => 'user'.rand(11111,99999).time().'@gmail.com',
            'password' => Hash::make($request->password),
            'type' => 'user',
            'phone' => $request->phone,
            'deposit_balance' => 32,
            'phone_code' => '+880',
            'ip' => $getIp,
            'remember_token' => Str::random(30),
        ]);

        if ($user){
            Auth::login($user);
            return redirect()->route('dashboard');
        }else{
            return back()->with('message', 'Registration Fail');
        }

    }

    public function ref_code()
    {
        $str1 = strtolower(Str::random(2));
        $rand = rand(000,999);

        if (rand(111,999) % 2 == 0){
            $refCode = $str1.$rand;
        }else{
            $refCode = $rand.$str1;
        }
        return $refCode;
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}

