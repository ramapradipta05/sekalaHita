@extends('layout.layout')
@section('content')
<hr>
<h1>

<br>
<center>
TAMBAH Mata Kuliah
<br>
<br>
Input Data Here
</center>
</h1>

<div class="container p-3 my-3 border shadow-lg p-3 mb-5 bg-white rounded">
<form action="{{ url('/simpanmatkul') }}" method="POST" class="needs-validation" novalidate="">
{{ csrf_field() }}
<div class="form-group">
    <label for="uname">Nama Matkul:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter name" name="namamatkul" required="">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
    <label for="pwd">Jumlah SKS:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter Address" name="sks" required="">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="remember" required=""> I agree on this data.
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </label>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
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