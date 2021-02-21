<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sekala extends Controller
{
    public function returnView()
    {
        $namaDepan = 'Rama';
        $namaBelakang = 'Pradipta';
        return view('greetings', compact('namaDepan','namaBelakang'));
    }

    public function buatfitur(){
        return 'ea';
    }
}
