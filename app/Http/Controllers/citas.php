<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class citas extends Controller
{
    public function create(){

    }
    public function delete(){

    }
    public function update(){

    }
    public function getListbyid($id){
        try{
            $citas = DB::select('select * from citas where id_user = ?', [$id]);
            $length = sizeof($citas);
            if($length > 0){
                return view('citas', ['citas' => $citas]);
            }else{
                return view('citas');
            }
            dd($citas);
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Someting is wrong with de DB');
        }
    }
    public function getList(){

    }
    public function getbyId(){

    }
}
