<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sekala extends Controller
{
    public function returnView($id)
    {
        $namaDepan = 'Rama';
        $namaBelakang = 'Pradipta';
        return view('greetings', compact('id','namaDepan','namaBelakang'));
    }

    public function buatfitur(){
        return 'ea';
    }
}
