@extends('layout.layout')
@section('content')
<hr>
<h1>
    
    <br>
    <center>
    DATA DOSEN
    <br>
    <br>
    Here's The Data
    </center>
</h1>

<style>
    .word {
    font-size: 20px;
}
</style>

<div class="container p-3 my-3 border shadow-lg p-3 mb-5 bg-white rounded">
    <div class="word">
    
    <table class="float-right">
        <tbody>
        <tr>
            <td>
                <a href="{{ url('/tambahdosen') }}"><button type="button" class="btn btn-outline-primary">Add New</button></a>
            </td>
        </tr>
        </tbody></table>
        
        <br><br>
    <center>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                        <th class="text-right">Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                        <th class="text-right">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse($dosen as $m)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$m->nama}}</td>
                        <td>{{$m->alamat}}</td>
                        <td>{{$m->nik}}</td>
                        <td>
                        <form class="text-right" method="GET">
                            {{ csrf_field() }}
                            <button type="button" class="btn btn-outline-danger" onclick="location.href='/del/{{$m->id}}'">Delete</button> 
                            <button type="button" class="btn btn-outline-success" onclick="location.href='/editdos/{{$m->id}}'">Update</button>
                            <button type="button" class="btn btn-outline-info" onclick="location.href='/jadwaldosen/{{$m->id}}'">Atur Jadwal</button></a>
                            <button type="button" class="btn btn-outline-info" onclick="location.href='/listjadwal/{{$m->id}}'">Lihat Jadwal</button></a>
                        </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">Data tidak ditemukan.</td>
                    </tr>
                    @endforelse  
                        
                </tbody>
            </table>
            <hr>
            
    </center>
    <center>
        <a href="{{ url('/') }}"><button type="button" class="btn btn-outline-info">Home</button></a>
    </center>
    </div>
    </div>

@endsection