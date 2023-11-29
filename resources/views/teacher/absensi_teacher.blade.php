@extends('layouts.teacher')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0">Data Absensi Murid</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Kehadiran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Murid 1</td>
                        <td>Laki-laki</td>
                        <td>Tidak Hadir</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Murid 2</td>
                        <td>Perempuan</td>
                        <td>Tidak Hadir</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Murid 3</td>
                        <td>Laki-laki</td>
                        <td>Hadir</td>
                    </tr>
                    <!-- Lanjutkan dengan data murid lainnya -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
