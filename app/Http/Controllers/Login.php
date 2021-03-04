<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Login extends Controller
{
    //
    public function Sign(Request $request){
        $credentials = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string'
        ]);

        if($request['email'] == 'user' && $request['password'] =='Admin123'){
            $request->session()->put('access_token', $request['_token']);
            return redirect('home');
        }else{
            return back()
            ->withErrors(['email' => 'The provided credentials do not match our records.'])
            ->withInput($request->except('password'));
        }
    }

    public function Logout(Request $request){
        $request->session()->forget('access_token');
        if (session('auth_token')=='') {
            return redirect ('/');
        }
    }
}
