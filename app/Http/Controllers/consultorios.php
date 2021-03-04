<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class consultorios extends Controller
{
    public function create(Request $request){
        try{
            $request->validate([
                'doctor_name' => 'required|string',
                'telefono' => 'required|integer'
            ]);
            DB::insert('insert into consultorio (doctor_name, telefono) values (?, ?)', [ $request['doctor_name'], $request['telefono']]);
            return view('create-consultorio')->with('msg', 'El Consultorio ha sido creado');
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }
    public function updateinfo($id){
        try {
            $consultorio = DB::table('consultorio')->where('consultorio.id','=',$id)->get();
            return view('edit-consultorio', ['consultorio'=>$consultorio[0]]);
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }

    public function update(Request $request, $id){
        try{
            $request->validate([
                'doctor_name' => 'required|string',
                'telefono' => 'required|integer'
            ]);
            DB::table('consultorio')
            ->where('id', $id)
            ->update(['doctor_name'=>$request['doctor_name'], 'telefono'=>$request['telefono']]);
            return redirect('/home');
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }
}
