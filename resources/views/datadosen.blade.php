@extends('layout')
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

<div class="word">
    <center>
        
            <table class="word">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse($dosen as $m)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->alamat}}</td>
                            <td>{{$m->nik}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Member tidak ditemukan.</td>
                        </tr>
                    @endforelse    
                </tbody>
            </table>
            <br><br>
            
    </center>
</div>

<center>
    <a href="{{ url('/') }}"><button>Home</button></a>
</center>

@endsection