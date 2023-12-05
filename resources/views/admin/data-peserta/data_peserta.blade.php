@extends('layouts.admin')
@section('content')

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <!-- Konten Utama -->
    <div class="container">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
        Tambah Peserta
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-fullscreen" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTitleId">Tambah Peserta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            </div>
            <div class="modal-body">
              <!-- Nama -->
              <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text"
                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Masukkan nama peserta</small>
              </div>
              <!-- Jenis Kelamin -->
              <div class="mb-3">
                <label for="" class="form-label">Nomor</label>
                <input type="text"
                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Nomor Telepon Peserta</small>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
    </div>
    <div class="container mt-4">
      <div class="card">
        <div class="card-header bg-primary text-white text-center">
          <h1 class="mb-0">Data Peserta</h1>
        </div>
        <table class="table table-hover mb-0 table table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Peserta</th>
              <th>No. Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Bahasa Indonesia</td>
              <td>Mempelajari Pelajaran Bahasa Indonesia</td>
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
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>

@endsection
