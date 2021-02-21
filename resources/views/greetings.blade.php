@extends('layout')
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
                Data Dosen
            </td>
            <td>
                :
            </td>
            <td>
                <a href="/dosen">http://127.0.0.1:8000/dosen</a>
            </td>
        </tr>
        <tr>
            <td>
                Data Dosen ID
            </td>
            <td>
                :
            </td>
            <td>
                <a href="/dosenid">http://127.0.0.1:8000/dosenid</a>
            </td>
        </tr>
        <tr>
            <td>
                Data Mahasiswa
            </td>
            <td>
                :
            </td>
            <td>
                <a href="/mahasiswa">http://127.0.0.1:8000/mahasiswa</a>
            </td>
        </tr><tr>
            <td>
                Data Matkul
            </td>
            <td>
                :
            </td>
            <td>
                <a href="/matkul">http://127.0.0.1:8000/matkul</a>
            </td>
        </tr>
            
        </table>
    </center>
</div>


@endsection