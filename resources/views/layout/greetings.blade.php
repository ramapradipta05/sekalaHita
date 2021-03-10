@extends('layout.layout')
@section('content')
<hr>
<h1>
    
    <br>
    <center>
    Welcome To Rama Pradipta Workspace
    <br>
    <br>
    Choose link that you want to go
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
        <tr>
            <td>
                <a href="{{ url('/dosen') }}"><button type="button" class="btn btn-outline-primary">Data Dosen</button></a>
            </td>
            <td></td><td></td>
            <td>
                <a href="{{ url('/mahasiswa') }}"><button type="button" class="btn btn-outline-primary">Data Mahasiswa</button></a>
            </td>
            <td></td><td></td>
            <td>
                <a href="{{ url('/dosenid') }}"><button type="button" class="btn btn-outline-primary">Find ID</button></a>
            </td>
            <td></td><td></td>
            <td>
                <a href="{{ url('/matkul') }}"><button type="button" class="btn btn-outline-primary">Mata Kuliah</button></a>
            </td>            
        </tr>
        
            
        </table>
    </center>
</div>


@endsection