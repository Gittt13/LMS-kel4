@extends('layouts.admin')

@section('content')
<!doctype html>
<html lang="en">

<head>
  <title>Data Peserta</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <!-- Konten Utama -->
    <div class="container">
    </div>



    <div class="container mt-4">
      <div class="card">
        <div class="card-header bg-primary text-white text-center">
          <h1 class="mb-0">Data Peserta</h1>
        </div>
        <table class="table table-hover mb-0 table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Foto</th>
              <th>Nama Peserta</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>No. Telepon</th>
              <th>Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data_pesertas as $sepuh)
            <tr>
              <td>{{ $sepuh->id }}</td>
              <td>
                @if ($sepuh->foto)
                <div class="card">
                  <div class="card-body">
                    @if ($sepuh->foto)
                    {{-- Tampilkan foto dengan tag <img> --}}
                    <img src="{{ constructImageFromBinary ($sepuh->foto, detectMimeType ($sepuh->foto)) }}"
                      alt="{{ $sepuh->nama }}" width="200" height="200">
                    @else
                    {{-- Tampilkan pesan jika tidak ada foto --}}
                    <p>Tidak ada foto.</p>
                    @endif
                  </div>
                </div>
                @endif
              </td>
              <td>{{ $sepuh->nama }}</td>
              <td>{{ $sepuh->email }}</td>
              <td>{{ $sepuh->alamat }}</td>
              <td>{{ $sepuh->nomor_telepon }}</td>
              <td>{{ $sepuh->jenis_kelamin }}</td>
              <td>
                <div class="container-fluid d-flex justify-content-center">
                  <!-- Modal trigger button -->
                  <button type="button" class="btn btn-warning btn-md" data-bs-toggle="modal"
                    data-bs-target="#modalEditId">

                    <i class="fas fa-edit"></i> <!-- Icon Edit -->
                    Edit
                  </button>


                  <!-- Delete -->
                  <a href="#" class="btn btn-danger btn-sm mx-1" role="button">
                    <i class="fas fa-trash-alt"></i> <!-- Icon Hapus -->
                    Delete
                  </a>
                </div>
              </td>
            </tr>
            @endforeach
            <!-- Tambahkan baris lebih banyak jika diperlukan -->
          </tbody>
        </table>

      </div>
    </div>
    </div>
    <!-- /.container-fluid -->
    </div>
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