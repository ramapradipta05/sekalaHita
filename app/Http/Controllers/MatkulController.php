<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\MatkulModel;
class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = DB::table('mata_kuliah')
        ->select('nama_mata_kuliah as nama_mata_kuliah', 'id as id')
        ->get();
        //dd($dosen);
        return view('data.datamatkul', compact(['matkul']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matkul = new MatkulModel;
        $matkul->nama_mata_kuliah = $request->namamatkul;
        $matkul->sks = $request->sks;
        $matkul->save();

        return redirect('/matkul');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = MatkulModel::find($id);
        
        return view('update.updatematkul',compact(['matkul','id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $mhs = MatkulModel::find($id);
        $mhs->timestamps = false;
        $mhs->nama_mata_kuliah = $request->namamatkul;
        $mhs->sks = $request->sks;
        $mhs->save();

        return redirect('/matkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
