@extends('layouts.admin')
@section('content')

<!-- Konten Utama -->
<div class="container mt-4">
  <div class="card">
    <div class="card-header bg-orange text-white text-center">
      <h1 class="mb-0">Data Mata Pelajaran Kelas Umum</h1>
    </div>
    <div class="card-header text-right">
      <a href="{{ route('admin.kelas-umum.tambah') }}" class="btn btn-primary" role="button">Tambah Pelajaran</a>
    </div>
    <div class="table-responsive">
      <table class="table table-hover mb-0" id="data-table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Mata Pelajaran</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kelas_umums as $kelas_umum)
          <tr>
            <td> {{ $loop->index + 1 }}</td>
            <td> {{ $kelas_umum->nama }}</td>
            <td> {{ $kelas_umum->deskripsi }} </td>
            <td>
              <a href="{{ route('admin.kelas-umum.edit', $kelas_umum->id) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
              <form action="{{ route('admin.kelas-umum.hapus', $kelas_umum->id) }}" method="post" class="d-inline">
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
</div>

<!-- /.container-fluid -->

<!-- /.Konten Utama -->

@endsection

@section('scripts')
<!--  script jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- script DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- Inisialisasi DataTables -->
<script>
  $(document).ready(function() {
    $('#data-table').DataTable({
      "paging": true, // Aktifkan pagination
      "searching": true // Aktifkan pencarian
    });
  });

</script>
@endsection
