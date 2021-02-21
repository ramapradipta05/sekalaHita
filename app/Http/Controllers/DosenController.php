<?php

namespace App\Http\Controllers;

use App\DosenModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DosenController extends Controller
{
    

    public function getAllDosenData(){

        $dosen = DosenModel::all();
        //dd($dosen);
        return view('datadosen', compact(['dosen']));
    }

    public function dosenid($id){

        
        $dosenid = DosenModel::where('id',$id)->first();
        //dd($dosenid);
        return view('datadosen_id_det', compact(['dosenid','id']));
    }
}
