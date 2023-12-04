@extends('layouts.admin')
@section('content')

<!-- Konten Utama -->
<div class="container mt-4">
  <div class="card">
    <div class="card-header bg-orange text-white text-center">
      <h1 class="mb-0">Data Kelas Peserta</h1>
    </div>
    <div class="card-header text-right">
      <a href="#" class="btn btn-primary" role="button">Tambah Data Kelas Peserta</a>
    </div>
    <table class="table table-hover mb-0 table table-bordered">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama </th>
          <th>Foto Profil</th>
          <th>Email</th>
          <th>Kelas Belajar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Naruto</td>
          <td></td>
          <td>Naruto@gmail.com</td>
          <td>Kelas Umum</td>
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

@endsection
