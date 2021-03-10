@extends('layout.layout')
@section('content')
<hr>
<h1>
    
    <br>
    <center>
    Dosen Id {{$id}}
    <br>
    <br>
    Data
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
                    Nama
                </td>
                <td>
                    :
                </td>
                <td>
                    {{$dosenid->nama}}
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    :
                </td>
                <td>
                    {{$dosenid->alamat}}
                </td>
            </tr>
            <tr>
                <td>
                    NIK
                </td>
                <td>
                    :
                </td>
                <td>
                    {{$dosenid->nik}}
                </td>
            </tr>
                
        </table>
    </center>
    <br>
    <center>
        <a href="{{ url('/') }}"><button type="button" class="btn btn-outline-primary">Home</button></a>
    </center>
</div>


@endsection