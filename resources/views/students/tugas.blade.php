@extends('layouts.student')

@section('content')
<div class="container mt-5 bg-white">
  <h2 class="mb-4">Daftar Tugas Siswa</h2>

  <!-- Pilihan Status -->
  <div class="btn-group mb-4" role="group" aria-label="Pilihan Status">
    <button type="button" class="btn btn-primary active" data-status="all">Semua</button>
    <button type="button" class="btn btn-primary" data-status="assigned">Ditugaskan</button>
    <button type="button" class="btn btn-primary" data-status="pending">Belum Diserahkan</button>
    <button type="button" class="btn btn-primary" data-status="completed">Selesai</button>
  </div>

  <!-- Tabel Daftar Tugas -->
  <table class="table table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Pelajaran</th>
        <th scope="col">Tugas</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr data-status="assigned">
        <th scope="row">1</th>
        <td>Matematila</td>
        <td>Mengerjakan Latihan Matematika</td>
        <td><span class="badge badge-primary">Ditugaskan</span></td>
      </tr>
      <tr data-status="pending">
        <th scope="row">2</th>
        <td>Bahasa Inggris</td>
        <td>Menulis Esai Bahasa Inggris</td>
        <td><span class="badge badge-warning">Belum Diserahkan</span></td>
      </tr>
      <tr data-status="completed">
        <th scope="row">3</th>
        <td>Ilmu Pengetahuan Alam</td>
        <td>Proyek Ilmu Pengetahuan Alam</td>
        <td><span class="badge badge-success">Selesai</span></td>
      </tr>
      <!-- Tambahkan baris sesuai dengan jumlah siswa dan tugas -->
    </tbody>
  </table>

</div>

<script>
  // Skrip JavaScript untuk mengelola pilihan status
  document.addEventListener('DOMContentLoaded', function () {
    const statusButtons = document.querySelectorAll('[data-status]');
    statusButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const status = button.getAttribute('data-status');
        filterByStatus(status);
      });
    });
  });

  function filterByStatus(status) {
    const rows = document.querySelectorAll('tbody tr');
    rows.forEach(function (row) {
      const rowStatus = row.getAttribute('data-status');
      if (status === 'all' || status === rowStatus) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  }
</script>
@endsection