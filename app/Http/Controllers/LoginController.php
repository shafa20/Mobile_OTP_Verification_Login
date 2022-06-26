<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Nexmo\Laravel\Facade\Nexmo;

class LoginController extends Controller
{
    public function index()
    {
        return view('signup');
    }
    public function register(Request $request)
    {

        $num = $request->input('mobile');
        $otp = mt_rand(1000,9999); 

         Nexmo::message()->send([
            'to' => 'Your Country Code like 91 or 92 or 31'.$num,  //$num is your Mobile number
            'from' => 'Your Registered Number',
            'text' => 'Your OTP is' .$otp. 'for Verification'
        ]);
        echo 'success', 'Message sent';
    }
       
    
}
