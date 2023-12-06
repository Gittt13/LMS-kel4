@extends('layouts.admin')
@section('content')
<!doctype html>
<html lang="en">

<head>
  <title>Data Kelas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <!-- Konten Utama -->
    <div class="container mt-4">
      <div class="card">
        <div class="card-header bg-orange text-white text-center">
          <h1 class="mb-0">Data Kelas Peserta</h1>
        </div>
        <div class="card-header text-right">
          <a href="#" class="btn btn-primary" role="button">Tambah Data Kelas Peserta</a>
        </div>
        <table class="table table-hover mb-0 table table-bordered" id="data-table">
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
    <!-- Masukkan script jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Masukkan script DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
      src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <!-- Inisialisasi DataTables -->
    <script>
      $(document).ready(function () {
        $('#data-table').DataTable({
          "paging": true, // Aktifkan pagination
          "searching": true // Aktifkan pencarian
        });
      });
    </script>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>

@endsection