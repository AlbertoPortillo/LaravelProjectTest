<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RegisterController;
use App\User;

class Register extends Controller
{
    //
    public function CreateUser(Request $request){
        $data = array('name'=>$request['name'], 'email'=>$request['email'], 'password'=>$request['password']);
        try{
            $request->validate([
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8'
            ]);
            User::create($data);
            return view('welcome')->with('msg', 'The user was created');
        }catch (Exception $e){
            return view('register')->with('msg', $e.getMessage());
        }
    }
}
