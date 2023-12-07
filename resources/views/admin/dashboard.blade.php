@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>

<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="container mt-1">
    <div class="container-fluid "></div>
    <h3 class="card-header mb-5 text-center " style="font-size: 40px; font-family: 'Noto Sans JP', sans-serif;">
      {{ __('Selamat Datang Admin') }} {{ auth()->user()->name }}
    </h3>
  </div>
  </div>
  <div class="container-fluid">
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


    </div>

    <div class="container-fluid">
      <!-- OPEN Grafik -->
      <div class="grafik">
        <div class="row">
          <div class="col-md-6 mt-3">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Grafik Jumlah Instruktur</h2>
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



    </div>


    {{-- Data Peserta--}}
    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Data Peserta
          </h2>
          <canvas id="myChart" width="400" height="200"></canvas>
        </div>
      </div>
    </div>

    {{-- Data Instructur --}}
    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Data Instructur</h2>
          <canvas id="myChart" width="400" height="200"></canvas>
        </div>
      </div>
    </div>

    {{-- Data Kelas --}}
    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Data Kelas</h2>
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


  <!-- Dummy Data  -->
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('diagram1').getContext('2d');
    var myChart1 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Kelas Umum', 'Kelas Programming', 'Kelas Tambahan'],
        datasets: [{
          label: 'Jumlah Instruktur',
          data: [10, 15, 8], // Ganti nilai ini sesuai dengan jumlah instruktur di setiap kelas
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
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

</body>

</html>
@endsection