@extends('layout.layout')
@section('content')
<hr>
<h1>
    
    <br>
    <center>
    @foreach($jadwal as $j)
    Jadwal dari Dosen {{$j->namadosen}}
    @break
    @endforeach
    <br>
    <br>
    List Jadwal
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
                <a href="{{ url('/dosen') }}"><button type="button" class="btn btn-outline-primary">Kembali ke Data Dosen</button></a>
            </td>
            <td>
                <a href="{{ url('/') }}"><button type="button" class="btn btn-outline-info">Home</button></a>
            </td>
        </tr>
        </tbody></table>
        
        <br><br>
    <center>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Hari</th>
                        <th class="text-right">Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Hari</th>
                        <th class="text-right">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse($jadwal as $m)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$m->matkul}}</td>
                        <td>{{$m->day}}</td>
                        <td>
                        <form class="text-right" method="GET">
                            {{ csrf_field() }}
                            <button type="button" class="btn btn-outline-danger">Delete</button> 
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
    </div>
    </div>

@endsection