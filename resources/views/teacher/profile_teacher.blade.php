@extends('layouts.teacher')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0">Data Diri Guru</h1>
        </div>
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <i class="fas fa-user fa-5x text-primary"></i>
                </div>
                <div class="col-md-9">
                    <h2 class="card-title">Yanto</h2>
                    <ul class="list-unstyled">
                        <li><strong>Mata Pelajaran  :</strong> Matematika</li>
                        <li><strong>Email           :</strong> yanto@example.com</li>
                        <li><strong>Alamat          :</strong> Jl. Contoh No. 123</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
