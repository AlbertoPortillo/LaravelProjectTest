<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pacientes extends Controller
{
    //
    public function create(Request $request){
        try{
            $request->validate([
                'name'=>'required|string',
                'email'=>'required|email|unique:pacientes',
                'telefono'=> 'required|int|unique:pacientes'
                ]);
            // dd($request);
                DB::insert('insert into pacientes (name, email, telefono) values (?, ?, ?)', [$request['name'], $request['email'], $request['telefono']]);
                return view('create-pacientes')->with('msg', 'El paciente ha sido creado');
        }catch(Exception $e){
            return view('create-pacientes')->with('msg', $e.getMessage());
        }
    }
    public function delete($id){
        try{
            DB::delete('delete from pacientes where id = "'.$id.'"');
            
            return redirect('/home');
        }catch(Exception $e){
            return view('create-pacientes')->with('msg', $e.getMessage());
        }
    }

    public function update(){
        
    }
    public function readlist(){
        $users = DB::table('pacientes')->get();
        $max = sizeof($users);
        if($max > 0){
            return view('home', ['users' => $users]);
        }else{
            return view('home');
        }
    }
    public function readid(){

    }
}
