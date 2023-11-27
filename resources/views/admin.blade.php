@extends('layouts.student')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-3">
      <div class="card text-center" style="background-color: #3498db; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-users" style="font-size: 90px;"></i>
          <h3>Data Mahasiswa</h3>
          <h3>Total: 100</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center" style="background-color: #2ecc71; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-graduation-cap" style="font-size: 90px;"></i>
          <h3>Data Jurusan</h3>
          <h3>Total: 10</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center" style="background-color: #e74c3c; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-book" style="font-size: 90px;"></i>
          <h3>Data Mata Kuliah</h3>
          <h3>Total: 50</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center" style="background-color: #f39c12; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-user-graduate" style="font-size: 58px;"></i>
          <h3>Data Mahasiswa Perjurusan</h3>
          <h3>Total: 30</h3> 
        </div>
      </div>
    </div>

    <div class="col-md-12 mt-5">
      <!-- Grafik -->
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Grafik Data Jurusan Mata Pelajaran</h2>
          <canvas id="myChart" width="400" height="200"></canvas>
        </div>
      </div>
    </div>

    <div class="col-md-12 mt-5">
      <!-- Kalender -->
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Kalender Kegiatan</h2>
          <div id="calendar"></div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- CDN --}}
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
@endsection
