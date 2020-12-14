<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function save_web_b_data(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
        ]);
    }

    public function verify_web_b_user($email){

        // return($email);
        $user = User::where('email', $email)->first();
        $user->email_verified_at = Carbon::now();
        $user->save();
    }

    public function change_web_b_password($email, $password){

        // return($email);
        $user = User::where('email', $email)->first();
        $user->password = Hash::make($password);
        $user->save();
    }
}
