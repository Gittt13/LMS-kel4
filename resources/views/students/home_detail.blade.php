@extends('layouts.student')

@section('content')
  <div class="container mt-5">
    <h1 class="mb-4">Selamat Datang di Kelas Bootstrap</h1>

    <!-- Modul 1 -->
    <div class="card mb-4">
      <div class="card-header">
        Modul 1: Pengenalan Bootstrap
      </div>
      <div class="card-body">
        <p class="card-text">Pada modul ini, kita akan mempelajari dasar-dasar Bootstrap dan cara menggunakannya dalam pengembangan web responsif.</p>
        <a href="#" class="btn btn-primary">Lihat Modul</a>
      </div>
    </div>

    <!-- Modul 2 -->
    <div class="card mb-4">
      <div class="card-header">
        Modul 2: Komponen Bootstrap
      </div>
      <div class="card-body">
        <p class="card-text">Dalam modul ini, kita akan fokus pada penggunaan berbagai komponen Bootstrap seperti tombol, formulir, dan navigasi.</p>
        <a href="#" class="btn btn-primary">Lihat Modul</a>
      </div>
    </div>

    <!-- Tugas -->
    <div class="card">
      <div class="card-header">
        Tugas Minggu Ini
      </div>
      <div class="card-body">
        <p class="card-text">Buatlah halaman web sederhana menggunakan Bootstrap. Pastikan menggunakan grid system dan setidaknya satu komponen Bootstrap.</p>
        <a href="#" class="btn btn-success">Kirim Tugas</a>
      </div>
    </div>

  </div>
@endsection