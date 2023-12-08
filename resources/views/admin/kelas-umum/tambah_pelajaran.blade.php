
@extends('layouts.admin')

@section('content')
  <!-- Formulir Tambah Pelajaran -->
  <div class="container mt-4">
    <form action="{{ route('admin.kelas-umum.simpan') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="nama">Nama Mata Pelajaran:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
@endsection
