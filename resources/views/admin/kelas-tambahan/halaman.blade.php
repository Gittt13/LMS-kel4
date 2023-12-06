@extends('layouts.admin')
@section('content')

<!-- Konten Utama -->

<div class="container mt-4">
  <div class="card">
    <div class="card-header bg-orange text-white text-center">
      <h1 class="mb-0">Data Mata Pelajaran Kelas Tambahan</h1>
    </div>
    <div class="card-header text-right">
      <a href="#" class="btn btn-primary" role="button">Tambah Pelajaran </a>
    </div>
    <table class="table table-hover mb-0 table table-bordered " id="data-table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Mata Pelajaran </th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Critical Thinking</td>
          <td>Mempelajari Cara berfikir yang cerdas</td>
          <td>
            <a href="#" class="btn btn-warning btn-sm" role="button">
              <i class="fas fa-edit"></i> <!-- Icon Edit -->
            </a>
            <a href="#" class="btn btn-danger btn-sm" role="button">
              <i class="fas fa-trash-alt"></i> <!-- Icon Hapus -->
            </a>
          </td>
        </tr>
        <!-- Tambahkan baris lebih banyak jika diperlukan -->
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /.Konten Utama -->
@endsection

@section('scripts')
<!-- Masukkan script jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Masukkan script DataTables -->
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
