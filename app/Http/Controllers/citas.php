<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class citas extends Controller
{
    public function create(Request $request, $id){
        try{
            $request->validate([
                'consultorio' => 'required',
                'date' => 'required',
                'hour' => 'required'
            ]);
            DB::insert('insert into citas (id_user, fecha, hora, id_consul) values (?, ?, ?, ?)', [$id, $request['date'], $request['hour'], $request['consultorio']]);
            return redirect()->route('citas', ['id' => $id]);
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }

    public function delete($id, $cita){
        try{
            DB::delete('delete from citas where id = ?', [$cita]);
            return redirect()->route('citas', ['id' => $id]);
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }

    public function getView($id){
        try{
            $consultorios = DB::table('consultorio')->get();
            $max = sizeof($consultorios);
            if($max > 0){
                return view('crear-citas', ['consultorios' => $consultorios, 'id' => $id]);
            }else{
                return view('crear-citas', ['id'=>$id]);
            }
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }

    public function getListbyid($id){
        try{
            $citas = DB::select('select * from citas where id_user = ?', [$id]);
            $citas1 = DB::table('citas')
                        ->where('citas.id_user','=',$id)
                        ->join('consultorio', function($join){
                            $join->on('citas.id_consul','=','consultorio.id');
                        })->get();
            $length = sizeof($citas1);
            if($length > 0){
                return view('citas', ['citas' => $citas1, 'id' => $id]);
            }else{
                return view('citas', ['id' => $id]);
            }
            dd($citas);
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }
}
