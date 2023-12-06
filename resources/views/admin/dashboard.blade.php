@extends('layouts.admin')
@section('content')

<div class="container mt-1">
  <div class="container-fluid "></div>
  <h3 class="card-header mb-5 text-center " style="font-size: 40px; font-family: 'Noto Sans JP', sans-serif;">
    {{ __('Selamat Datang Admin') }} {{ auth()->user()->name }}
  </h3>
</div>
</div>

<div class="row m-1">
  <div class="col-md-3">
    <div class="card text-center" style="background-color: blueviolet; border-radius: 15px; color: white;">
      <div class="card-body">
        <i class="fas fa-users mb-2" style="font-size: 90px;"></i>
        <h3>Data Peserta</h3>
        <h5>Total: 2</h5>
        <a href="{{ route('data_peserta') }}" class="btn btn-light mt-3">Selengkapnya</a>
      </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="card text-center" style="background-color: #2ecc71; border-radius: 15px; color: white;">
      <div class="card-body">
        <i class="fas fa-graduation-cap mb-2" style="font-size: 90px;"></i>
        <h3>Data Instruktur</h3>
        <h5>Total: 2</h5>
        <a href="#" class="btn btn-light mt-3">Selengkapnya</a>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-center" style="background-color: #e74c3c; border-radius: 15px; color: white;">
      <div class="card-body">
        <i class="fas fa-book mb-2" style="font-size: 90px;"></i>
        <h3>Data Kelas</h3>
        <h5>Total: 3 </h5>
        <a href="#" class="btn btn-light mt-3">Selengkapnya</a>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-center" style="background-color: #f39c12; border-radius: 15px; color: white;">
      <div class="card-body">
        <i class="fas fa-user-graduate mb-2" style="font-size: 90px;"></i>
        <h3>Data Pelajaran</h3>
        <h5>Total: 18</h5>
        <a href="#" class="btn btn-light mt-3">Selengkapnya</a>
      </div>
    </div>
  </div>

  {{-- <div class="col-md-3 mt-3">
    <div class="card text-left" style="background-color: #B99470; border-radius: 15px; color: white;">
      <div class="card-body">
        <i class="fas fa-users mb-2" style="font-size: 50px; float: left; margin-right: 10px;"></i>
        <h5>Total User Aktif</h5>
        <h5>Total: 150</h5>
      </div>
    </div>
  </div>

  <div class="col-md-3 mt-3">
    <div class="card text-left" style="background-color: #B99470; border-radius: 15px; color: white;">
      <div class="card-body">
        <i class="fas fa-user-shield" style="font-size: 50px; float: left; margin-right: 8px;"></i>
        <h5>Total Admin User</h5>
        <h5>Total: 50</h5>
      </div>
    </div>
  </div>

  <div class="col-md-3 mt-3">
    <div class="card text-left" style="background-color: #B99470; border-radius: 15px; color: white;">
      <div class="card-body">
        <i class="fas fa-user-graduate" style="font-size: 50px; float: left; margin-right: 8px;"></i>
        <h5>Total Mahasiswa User</h5>
        <h5>Total: 100</h5>
      </div>
    </div>
  </div>

  <div class="col-md-3 mt-3">
    <div class="card text-left" style="background-color: #B99470; border-radius: 15px; color: white;">
      <div class="card-body">
        <i class="fas fa-user-graduate" style="font-size: 50px; float: left; margin-right: 8px;"></i>
        <h5>Total Pengunjung</h5>
        <h5>Total: 5</h5>
      </div>
    </div> --}}
  </div>

  <!-- OPEN Grafik -->
  <div class="grafik">
    <div class="row">
      <div class="col-md-6 mt-3">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Perbandingan Mahasiswa di Tiap Jurusan</h2>
            <canvas id="diagram1" width="400" height="400"></canvas>
          </div>
        </div>
      </div>
      <!-- Diagram Perbandingan Mahasiswa di Tiap Jurusan -->
      <div class="col-md-6 mt-3">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title"> Grafik Data Kelas</h2>
            <canvas id="diagram2" width="400" height="200"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END GRAFIK -->





  <!-- Kalender Kegiatan -->

  <div class="col-md-14 mt-113">
    <div class="card">
      <div class="card-body" style="height: 100vh !important;">
        <h2 class="card-title">Kalender Kegiatan</h2>
        <iframe src="https://calendar.google.com/calendar/embed?height=630&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FJakarta&title=Uni-Learn%20Schedule&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=Y18wZGFkMDJkYjdlZTY3MjhmNTljMWJhNGIxZDRlYTVjZGY0ZmVjYzc3ZDE0MDk0MDNiMTc5OWNjZTVmYmRjNDUyQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%2333B679&color=%238E24AA" style="border:solid 1px #777" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </div>

  {{-- Data Mahasiswa --}}
  <div class="col-md-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Data Mahasiswa
        </h2>
        <canvas id="myChart" width="400" height="200"></canvas>
      </div>
    </div>
  </div>

  {{-- Data Jurusan --}}
  <div class="col-md-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Data Jurusan</h2>
        <canvas id="myChart" width="400" height="200"></canvas>
      </div>
    </div>
  </div>

  {{-- Data Dosen Pengajar --}}
  <div class="col-md-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Data Dosen Pelajaran</h2>
        <canvas id="myChart" width="400" height="200"></canvas>
      </div>
    </div>
  </div>

</div>
</div>

<!-- CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css" />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js"></script>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>



<!-- perbandiangan mahasiswa -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('diagram2').getContext('2d');
    var perbandinganChart = new Chart(ctx, {
      type: 'doughnut'
      , data: {
        labels: ['Kelas Umum', 'Kelas Programming', 'Kelas Tambahan']
        , datasets: [{
          data: [18, 5, 4,], // Ganti dengan data yang sesuai
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)'
            , 'rgba(54, 162, 235, 0.7)'
            , 'rgba(255, 206, 86, 0.7)'
            ,]
          , borderColor: [
            'rgba(255, 99, 132, 0.7)'
            , 'rgba(54, 162, 235, 0.7)'
            , 'rgba(255, 206, 86, 0.7)'
            ,]
          , borderWidth: 1
        }]
      }
      , options: {
        cutoutPercentage: 50
        , responsive: true
      }
      ,
    });
  });

</script>


<!-- Dummy Data (Data Jurusan Mata Pelajaran) -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('diagram1').getContext('2d');
    var myChart1 = new Chart(ctx, {
      type: 'bar'
      , data: {
        labels: ['Teknik Mesin', 'Teknik Kimia', 'Teknik Elektro', 'Teknik Komputer', 'Teknik Sipil']
        , datasets: [{
          label: 'Jumlah Mata Kuliah'
          , data: [15, 22, 18, 25, 20]
          , backgroundColor: [
            'rgba(255, 99, 132, 0.7)'
            , 'rgba(54, 162, 235, 0.7)'
            , 'rgba(255, 206, 86, 0.7)'
            , 'rgba(75, 192, 192, 0.7)'
            , 'rgba(153, 102, 255, 0.7)'
            ,]
          , borderColor: [
            'rgba(255, 99, 132, 1)'
            , 'rgba(54, 162, 235, 1)'
            , 'rgba(255, 206, 86, 1)'
            , 'rgba(75, 192, 192, 1)'
            , 'rgba(153, 102, 255, 1)'
            ,]
          , borderWidth: 1
        }]
      }
      , options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });

</script>

<!-- Dummy Data (Data Mahasiswa) -->
{{--
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart2 = new Chart(ctx, {
      type: 'bar'
      , data: {
        labels: ['Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5']
        , datasets: [{
          label: 'Jumlah Mahasiswa'
          , data: [50, 40, 60, 30, 45]
          , backgroundColor: [
            'rgba(255, 99, 132, 0.7)'
            , 'rgba(54, 162, 235, 0.7)'
            , 'rgba(255, 206, 86, 0.7)'
            , 'rgba(75, 192, 192, 0.7)'
            , 'rgba(153, 102, 255, 0.7)'
            ,]
          , borderColor: [
            'rgba(255, 99, 132, 1)'
            , 'rgba(54, 162, 235, 1)'
            , 'rgba(255, 206, 86, 1)'
            , 'rgba(75, 192, 192, 1)'
            , 'rgba(153, 102, 255, 1)'
            ,]
          , borderWidth: 1
        }]
      }
      , options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });

</script> --}}


@endsection