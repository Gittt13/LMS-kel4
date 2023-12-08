@extends('layouts.admin')

@section('content')
  <!-- Formulir Edit Pelajaran -->
  <div class="container mt-4">
    <form action="{{ route('admin.kelas-umum.update', $kelas_umum->id) }}" method="post">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="nama">Nama Mata Pelajaran:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $kelas_umum->nama }}" required>
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $kelas_umum->deskripsi }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection