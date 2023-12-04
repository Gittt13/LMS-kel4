@extends('layouts.admin')
@section('content')

<!-- Header Konten (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Instructur Kelas </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                     <a href="{{ route('admin.dashboard') }}" class="nav-link {{ is_active('admin.dashboard') }} ">Dashboard</a>
                    <li class="breadcrumb-item active">Instructur Kelas</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.Header Konten -->

<!-- Konten Utama -->

    <div class="container mt-4">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama </th>
                            <th>Foto Profil</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Asal Institusi/Sekolah</th>
                            <th>Nomor Telepon</th>
                            <th>Deskripsi/Bio</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Danzo</td>
                            <td></td>
                            <td>danzo@gmail.com</td>
                            <td>Desa Konoha</td>
                            <td>Iwagakure School</td>
                            <td>087236232773</td>
                            <td>Saya ingin menjadi hokage tapi tidak kesampaian</td>
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
