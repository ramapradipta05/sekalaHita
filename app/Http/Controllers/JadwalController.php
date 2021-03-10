<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use Illuminate\Support\Facades\DB;
class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //dd($id);
        $jadwal = DB::table('jadwal')
        ->select(
            'dosen.nama as namadosen',
            'mata_kuliah.nama_mata_kuliah as matkul',
            'hari as day'
        )
        ->join('dosen', 'jadwal.dosen_id', '=', 'dosen.id')
        ->join('mata_kuliah', 'jadwal.mata_kuliah_id', '=', 'mata_kuliah.id')
        ->where('jadwal.dosen_id', $id)
        ->get();
        //dd($jadwal->namadosen);
        return view('data.listjadwal',compact(['jadwal']));
        //, compact(['jadwal']));
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
            $data = $request->all();
            if(count($request->matkul) > 0){
                foreach($request->jadwalmatkul as $jadwal=>$j){
                    $data2=array(
                        'hari'=>$request->jadwalmatkul[$jadwal],
                        'mata_kuliah_id'=>$request->matkul[$jadwal],
                        'dosen_id'=>$request->iddosen
                    );
                jadwal::insert($data2);
                }
            }
            
        return redirect('/dosen');
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
        //
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
        //
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
