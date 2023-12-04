@extends('layouts.admin')
@section('content')

<!-- Header Konten (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kelas Umum</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kelas Umum</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.Header Konten -->

<!-- Konten Utama -->
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Jurusan</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>RPL</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm" role="button">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" role="button">Hapus</a>
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

@endsection
