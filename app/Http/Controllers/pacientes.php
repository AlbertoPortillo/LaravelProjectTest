<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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

    public function update(Request $request, $id){
        try{
            $request->validate([
                'name' => 'required|string',
                'email' => 'required',
                'telefono' => 'required|integer'

            ]);
            DB::table('pacientes')
            ->where('id', $id)
            ->update(['name'=>$request['name'], 'email'=>$request['email'], 'telefono'=>$request['telefono']]);
            return redirect('/home');
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
        
    }
    public function editinfo($id){
        try {
            $paciente = DB::table('pacientes')->where('pacientes.id','=',$id)->get();
            return view('editar-pacientes', ['paciente'=>$paciente[0]]);
        } catch (Exception $e) {
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }
    public function readlist(){
        $users = DB::table('pacientes')->get();
        $consultorios = DB::table('consultorio')->get();
        return view('home', ['users' => $users, 'consultorios' => $consultorios]);
    }

}
