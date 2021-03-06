@extends('layout.layout')
@section('content')
<hr>
<h1>
    
    <br>
    <center>
    DATA MATKUL
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
                <a href="{{ url('/tambahmatkul') }}"><button type="button" class="btn btn-outline-primary">Add New</button></a>
            </td>
        </tr>
        </tbody></table>
        
        <br><br>
    <center>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Matkul</th>
                        <th class="text-right">Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Matkul</th>
                        <th class="text-right">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse($matkul as $m)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$m->nama_mata_kuliah}}</td>
                        <td>
                        <form class="text-right">
                            <button type="button" class="btn btn-outline-danger">Delete</button> 
                            <button type="button" class="btn btn-outline-success" onclick="location.href='/editmatkul/{{$m->id}}'">Update</button>
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

