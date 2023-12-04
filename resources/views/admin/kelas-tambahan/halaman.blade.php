@extends('layouts.admin')
@section('content')

<!-- Konten Utama -->

    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-orange text-white text-center">
            <h1 class="mb-0">Data Mata Pelajaran Kelas Tambahan</h1>
        </div>
                <table class="table table-hover mb-0 table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mata Pelajaran </th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Critical Thinking</td>
                            <td>Mempelajari Cara berfikir yang cerdas</td>
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
Ini tampialn contoh aja puh, soalnya selanjutnya data pelajaranya kalo gak salah diinput database, mantappp deadline kematian
@endsection
