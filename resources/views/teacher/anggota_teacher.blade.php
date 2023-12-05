@extends('layouts.teacher')

@section('content')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<div class="container mt-5">
    <!-- Dashboard -->
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('kelas') }}" class="card text-center" style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <ion-icon name="chatbubble-outline" style="font-size: 25px;"></ion-icon>
                    <h5 style="font-size: small;">Forum</h5>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('tugas.teacher') }}" class="card text-center" style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <ion-icon name="document-outline" style="font-size: 25px;"></ion-icon>
                    <h5 style="font-size: small;">Tugas</h5>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('anggota') }}" class="card text-center" style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <ion-icon name="people-outline" style="font-size: 25px;"></ion-icon>
                    <h5 style="font-size: small;">Anggota</h5>
                </div>
            </a>
        </div>
    </div>

    <!-- Pengajar Section -->
    <div class="card mt-4">
        <div class="card-header text-white text-center" style="background-color: #164863;">
            <h3 class="mb-0">Kelas</h3>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <!-- Pengajar -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Pengajar
                    </div>
                    <span class="badge badge-primary">Pengajar</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Siswa Section -->
    <div class="card mt-4">
        <div class="card-header text-white text-center" style="background-color: #164863;">
            <h3 class="mb-0">Siswa</h3>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <!-- Siswa 1 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 1
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 2 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 2
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 3 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 3
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 4 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 4
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 5 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 5
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 6 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 6
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 7 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 7
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 8 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 8
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 9 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 9
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Siswa 10 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="https://via.placeholder.com/50" alt="Avatar" class="mr-3">
                        Nama Siswa 10
                    </div>
                    <span class="badge badge-primary">Siswa</span>
                </li>

                <!-- Tambahkan lebih banyak anggota jika diperlukan -->

            </ul>
        </div>
    </div>
</div>
@endsection
