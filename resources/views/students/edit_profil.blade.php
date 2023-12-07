@extends('layouts.student')

@section('content')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const profileForm = document.getElementById("profileForm");

        profileForm.addEventListener("submit", function (event) {
            event.preventDefault();
            alert("Perubahan berhasil disimpan!");
            profileForm.submit();
        });
    });
</script>
<body class="bg-light d-flex align-items-center">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Edit Profil</h2>
                </div>
                <div class="card-body">
                    <form id="profileForm" action="{{ url('profil/update') }}/{{ $profil->id }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="nama" value="{{ $profil->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="alamat" value="{{ $profil->alamat }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $profil->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No. HP</label>
                            <input type="tel" class="form-control" id="phone" name="no_hp" value="{{ $profil->no_hp }}">
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection