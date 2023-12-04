@extends('layouts.student')

@section('content')
<form class="form-inline continer">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kelas Yang Tersedia</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Pilih Salah satu</option>
    <option value="1">B. Inggris</option>
    <option value="2">Pemrograman Web Lanjut</option>
    <option value="3">Laravel</option>
  </select>



  <button type="submit" class="btn btn-primary my-1" onclick="alert('Apakah anda yakin ingin menambahkan kelas ini!')">Submit</button>
</form>
@endsection


