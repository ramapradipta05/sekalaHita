<?php

namespace App\Http\Controllers;

use App\DosenModel;
use App\MatkulModel;
use App\dosen_matkul;
use App\jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DosenController extends Controller
{
    

    public function getAllDosenData(){

        $dosen = DosenModel::all();
        //dd($dosen);
        return view('data.datadosen', compact(['dosen']));
    }

    public function dosenid($id){
        $dosenid = DosenModel::where('id',$id)->first();
        //dd($dosenid);
        return view('data.datadosen_id_det', compact(['dosenid','id']));
    }

    public function addnew(){
        $matkul = MatkulModel::all();
        return view('tambah.tambahdosen', compact(['matkul']));
    }

    public function jadwal($id){
        $dosenmatkul = DB::table('dosen_matkul')
        ->select(
            'dosen.nama as namadosen',
            'mata_kuliah.nama_mata_kuliah as matkul',
            'mata_kuliah.id as idmatkul',
            'dosen_id as iddosen'
        )
        ->join('dosen', 'dosen_matkul.dosen_id', '=', 'dosen.id')
        ->join('mata_kuliah', 'dosen_matkul.mata_kuliah_id', '=', 'mata_kuliah.id')
        ->where('dosen_matkul.dosen_id', $id)
        ->get();
        //dd($dosenmatkul->namadosen);
        return view('tambah.jadwaldosen', compact(['dosenmatkul']));
    }

    public function store(Request $request)
    {
        $dosen = new DosenModel();
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;
        $dosen->nik = $request->nik;
        $dosen->save();

        $datadosen = DosenModel::orderBy('id', 'desc')->first();
        //dd();
        foreach ($request->input('matkul') as $m){
            $dosmatkul = new dosen_matkul();
            $dosmatkul->dosen_id = $datadosen->id;
            $dosmatkul->mata_kuliah_id = $m;
            $dosmatkul->save();
        }
        
        return redirect('/dosen');
    }

    public function edit($id)
    {
        $dos = DosenModel::find($id);
        $matkul = MatkulModel::all();
        $dosmatkul = dosen_matkul::where('dosen_id',$id)->pluck('mata_kuliah_id')->toArray();

        return view('update.updatedosen',compact(['dos','matkul','id','dosmatkul']));
    }

    public function update(Request $request, $id)
    {
        
        $dos = DosenModel::find($id);
        $dos->timestamps = false;
        $dos->nama = $request->nama;
        $dos->alamat = $request->alamat;
        $dos->nik = $request->nik;
        $dos->save();
        //
        jadwal::where('dosen_id',$id)->delete();
        dosen_matkul::where('dosen_id',$id)->delete();
        if(!empty($request->matkul)){
            foreach($request->matkul as $idmatkul){
                $dosmatkulup = new dosen_matkul();
                $dosmatkulup->timestamps=false;
                $dosmatkulup->dosen_id = $id;
                //dd($id);
                $dosmatkulup->mata_kuliah_id = $idmatkul;
                $dosmatkulup->save();
            }
            
        }
        return redirect('/dosen');
    }

    public function destroy($id)
    {
        $jadwal = jadwal::where('dosen_id',$id)->get()->first();
        if($jadwal == !NULL){
        $jadwal->delete();
        }

        $dosmat = dosen_matkul::where('dosen_id',$id)->get();
        if($dosmat == !NULL){
        $dosmat->delete();
        }

        $dosen = DosenModel::where('id',$id)->get()->first();
        //dd($member);
        $dosen->delete();
        return redirect('/dosen');
    }
}
