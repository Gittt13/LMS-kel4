@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-orange text-white text-center">
            <h1 class="mb-0">Edit Mata Pelajaran Kelas Tambahan</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.kelas-tambahan.update', $kelas_tambahan->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mata Pelajaran</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $kelas_tambahan->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $kelas_tambahan->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection