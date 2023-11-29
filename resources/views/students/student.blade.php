@extends('layouts.student')

@section('content')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body" style="background-color: #00C0EF">
                        <ion-icon name="people-outline" style="font-size: 90px; color: white"></ion-icon>
                        <h3 class="text-white">Tugas Siswa</h3>
                        <h3 class="text-white">66</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="background-color: #00C0EF">
                    <div class="card-body">
                        <ion-icon name="people-outline" style="font-size: 90px; color: white"></ion-icon>
                        <h3 class="text-white">Absensi</h3>
                        <h3 class="text-white">66</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="background-color: #00C0EF">
                    <div class="card-body">
                        <ion-icon name="people-outline" style="font-size: 90px; color: white"></ion-icon>
                        <h3 class="text-white">Keuangan</h3>
                        <h3 class="text-white">66</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="background-color: #00C0EF">
                    <div class="card-body">
                        <ion-icon name="people-outline" style="font-size: 90px; color: white"></ion-icon>
                        <h3 class="text-white">Nilai</h3>
                        <h3 class="text-white">66</h3>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <h2 class="mb-4">Formulir Absensi</h2>

                <form>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputNo">No</label>
                            <input type="text" class="form-control" id="inputNo" placeholder="No">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputNama">Nama</label>
                            <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputKelas">Kelas</label>
                            <input type="text" class="form-control" id="inputKelas" placeholder="Kelas">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputKeterangan">Keterangan</label>
                            <input type="text" class="form-control" id="inputKeterangan" placeholder="Keterangan">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputAksi">Aksi</label>
                            <button type="button" class="btn btn-primary btn-block" onclick="submitForm()">Tambah</button>
                        </div>
                    </div>
                </form>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data absensi akan ditampilkan di sini -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
@endsection
