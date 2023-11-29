@extends('layouts.student')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
      <h2>Selamat Datang, [Nama Siswa]!</h2>
      <p>Di sini Anda dapat melihat informasi terkini tentang tugas, acara, dan pemberitahuan lainnya.</p>

      <!-- Pemberitahuan Tugas -->
      <div class="card mb-4">
        <div class="card-header">
          Pemberitahuan Tugas
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <span class="font-weight-bold">Tugas Matematika:</span> Mengerjakan Latihan Halaman 30-40
          </li>
          <li class="list-group-item">
            <span class="font-weight-bold">Bahasa Inggris:</span> Menulis Esai tentang Tema Bebas
          </li>
          <!-- Tambahkan lebih banyak pemberitahuan tugas sesuai kebutuhan -->
        </ul>
      </div>
    </div>

    <!-- Widget Lainnya (Misalnya: Kalender, Berita, dll.) -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Kalender
        </div>
        <div class="card-body">
          <!-- Sertakan tampilan kalender atau widget lainnya di sini -->
          <!-- Contoh: -->
          <div id="calendar"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sertakan file Bootstrap JS dan file lainnya (jika diperlukan) -->
<script src="path/to/bootstrap/js/bootstrap.min.js"></script>
<!-- Sertakan file lain yang diperlukan, misalnya FullCalendar.js -->

<script>
  // Inisialisasi kalender (contoh menggunakan FullCalendar.js)
  document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      // Konfigurasi kalender
      // ...
    });

    calendar.render();
  });
</script>
@endsection