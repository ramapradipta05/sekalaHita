@extends('layout.layout')
@section('content')
<hr>
<h1>

<br>
<center>
UPDATE DATA MAHASISWA
<br>
<br>
Input Data Here
</center>
</h1>

<div class="container p-3 my-3 border shadow-lg p-3 mb-5 bg-white rounded">

  <form action="/updatemahasiswa/{{$id}}" method="POST" class="needs-validation" novalidate="">
  {{ csrf_field() }}
  @method('PUT')
  <div class="form-group">
      <label for="uname">Nama:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter name" value="{{$mhs->nama}}" name="nama" required="">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
      <label for="pwd">Alamat:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Address" value="{{$mhs->alamat}}" name="alamat" required="">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
      <label for="pwd1">NIM:</label>
      <input type="text" class="form-control" id="pwd1" placeholder="Enter NIM" value="{{$mhs->nim}}" name="nim" required="">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">

      <label for="pwd1">Mata Kuliah Pilihan:</label>
          <table>
            <tbody>
              @foreach($matkul as $m)
              <tr>
                <td>
                  <div class="form-check">
                      <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="{{$m->id}}" name="matkul[]"
                              @if(in_array($m->id,$mhsmatkul))
                                  CHECKED
                              @endif
                          >{{$m->nama_mata_kuliah}}
                      </label>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
  </div>
  <br>
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