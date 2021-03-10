<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MahasiswaModel;
use App\MatkulModel;
use App\mahasiswa_matkul;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')
        ->paginate(5);
        //dd($dosen);
        return view('data.datamahasiswa', compact(['mahasiswa']));
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
        $mahasiswa = new MahasiswaModel();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->save();

        $datamhs = MahasiswaModel::orderBy('id', 'desc')->first();
        //dd();
        foreach ($request->input('matkul') as $m){
            $mhsmatkul = new mahasiswa_matkul();
            $mhsmatkul->mahasiswa_id = $datamhs->id;
            $mhsmatkul->mata_kuliah_id = $m;
            $mhsmatkul->save();
        }

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $matkul = MatkulModel::all();
        return view('tambah.tambahmahasiswa', compact(['matkul']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = MahasiswaModel::find($id);
        $matkul = MatkulModel::all();
        $mhsmatkul = mahasiswa_matkul::where('mahasiswa_id',$id)->pluck('mata_kuliah_id')->toArray();

        return view('update.updatemahasiswa',compact(['mhs','matkul','id','mhsmatkul']));
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
        
        
        $mhs = MahasiswaModel::find($id);
        $mhs->timestamps = false;
        $mhs->nama = $request->nama;
        $mhs->alamat = $request->alamat;
        $mhs->nim = $request->nim;
        $mhs->save();
        //
        mahasiswa_matkul::where('mahasiswa_id',$id)->delete();
        if(!empty($request->matkul)){
            foreach($request->matkul as $idmatkul){
                $mhsmatkulup = new mahasiswa_matkul();
                $mhsmatkulup->timestamps=false;
                $mhsmatkulup->mahasiswa_id = $id;
                //dd($id);
                $mhsmatkulup->mata_kuliah_id = $idmatkul;
                $mhsmatkulup->save();
            }
            
        }
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $mahasiswa = MahasiswaModel::where('id',$id)->get()->first();
        //dd($mahasiswa);
        $mahasiswa->delete();

        return redirect('/mahasiswa');
    }
}
