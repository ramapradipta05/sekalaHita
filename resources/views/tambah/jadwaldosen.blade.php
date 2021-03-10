@extends('layout.layout')
@section('content')
<hr>
<h1>

<br>
<center>
PENGATURAN JADWAL DOSEN
<br>
<br>
Input Data Here
</center>
</h1>

<div class="container p-3 my-3 border shadow-lg p-3 mb-5 bg-white rounded">
<center>
<form action="{{ url('/simpanjados') }}" method="POST" class="needs-validation" novalidate="">
{{ csrf_field() }}


<table>
  <tr>
    @foreach($dosenmatkul as $dosmat)
    <td>
    <div class="form-group">
        <label for="uname">{{$dosmat->matkul}}</label>
        <input type="hidden" value="{{$dosmat->iddosen}}" name="iddosen">
        <input type="hidden" class="form-control" id="uname" placeholder="Enter name" value="{{$dosmat->idmatkul}}" name="matkul[]" required="">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    </td>    
    
    <td>
    <div class="form-group">
        <label for="pwd">Jadwal Hari Matkul:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Day" name="jadwalmatkul[]" required="">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    </td>
  </tr>
  @endforeach
</table>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
// Get the forms we want to add validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
  form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
  }, false);
});
}, false);
})();
</script>


@endsection