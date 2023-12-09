@extends('layouts.admin')

@section('content')
  <!-- Konten Utama -->
  <div class="container mt-4">
    <div class="card">
      <div class="card-header bg-orange text-white text-center">
        <h1 class="mb-0">Data Mata Pelajaran Kelas Programming</h1>
      </div>
      <div class="card-header text-right">
        <a href="{{ route('admin.kelas-programming.tambah') }}" class="btn btn-primary" role="button">Tambah Pelajaran</a>
      </div>
      <table class="table table-hover mb-0 table table-bordered" id="data-table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Mata Pelajaran</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kelas_programmings as $kelas_programming)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{ $kelas_programming->nama }}</td>
              <td>{{ $kelas_programming->deskripsi }}</td>
              <td>
                <a href="{{ route('admin.kelas-programming.edit', $kelas_programming->id) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
                <form action="{{ route('admin.kelas-programming.hapus', $kelas_programming->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.Konten Utama -->
@endsection
