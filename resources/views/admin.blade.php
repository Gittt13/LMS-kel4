@extends('layouts.admin')
@section('content')
<header>
  <h5><b><i class="fa fa-dashboard"></i>Dashboard Admin</b></h5>
  
</header>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-3">
      <div class="card text-center" style="background-color: #3498db; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-users" style="font-size: 90px;"></i>
          <h3>Data Mahasiswa</h3>
          <h3>Total: 100</h3>
          <a href="#" class="btn btn-light mt-3">More Info</a>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="card text-center" style="background-color: #2ecc71; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-graduation-cap" style="font-size: 90px;"></i>
          <h3>Data Jurusan Kuliah </h3>
          <h3>Total: 10</h3>
          <a href="#" class="btn btn-light mt-3">More Info</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center" style="background-color: #e74c3c; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-book" style="font-size: 90px;"></i>
          <h3>Data Mata Kuliah</h3>
          <h3>Total: 50</h3>
          <a href="#" class="btn btn-light mt-3">More Info</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center" style="background-color: #f39c12; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-user-graduate" style="font-size: 68px;"></i>
          <h3>Data Mahasiswa Perjurusan</h3>
          <h3>Total: 30</h3>
          <a href="#" class="btn btn-light mt-2">More Info</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3">
      <div class="card text-left" style="background-color: #B99470; border-radius: 15px; color: white;">
        <div class="card-body">
          <i class="fas fa-users" style="font-size: 50px; float: left; margin-right: 10px;"></i>
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
      </div>
    </div>

    <!-- Grafik -->
    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Grafik Data Jurusan Mata Pelajaran</h2>
          <canvas id="myChart" width="400" height="200"></canvas>
        </div>
      </div>
    </div>

    <!-- Kalender Kegiatan -->
    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Kalender Kegiatan</h2>
          <div id="calender"></div>
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


<!-- Script untuk FullCalendar -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    
    $('#calender').fullCalendar({
      
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      events: [
        
        {
          title: 'Acara 1',
          start: '2023-11-30',
          end: '2023-12-02'
        },
        {
          title: 'Acara 2',
          start: '2023-12-05',
          end: '2023-12-07'
        }
      ]
    });
  });

</script>


<!-- Dummy Data (Data Jurusan Mata Pelajaran) -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart1 = new Chart(ctx, {
      type: 'bar'
      , data: {
        labels: ['Teknik Mesin', 'Teknik Kimia', 'Teknik Elektro', 'Teknik Komputer', 'Teknik Sipil']
        , datasets: [{
          label: 'Jumlah Mata Pelajaran'
          , data: [15, 22, 18, 25, 20]
          , backgroundColor: [
            'rgba(255, 99, 132, 0.7)'
            , 'rgba(54, 162, 235, 0.7)'
            , 'rgba(255, 206, 86, 0.7)'
            , 'rgba(75, 192, 192, 0.7)'
            , 'rgba(153, 102, 255, 0.7)'
          , ]
          , borderColor: [
            'rgba(255, 99, 132, 1)'
            , 'rgba(54, 162, 235, 1)'
            , 'rgba(255, 206, 86, 1)'
            , 'rgba(75, 192, 192, 1)'
            , 'rgba(153, 102, 255, 1)'
          , ]
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
{{-- <script>
  document.addEventListener('DOMContentLoaded', function() {
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
          , ]
          , borderColor: [
            'rgba(255, 99, 132, 1)'
            , 'rgba(54, 162, 235, 1)'
            , 'rgba(255, 206, 86, 1)'
            , 'rgba(75, 192, 192, 1)'
            , 'rgba(153, 102, 255, 1)'
          , ]
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
