@extends('layouts.teacher')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
        <h1 class="card-header text-center">
                {{ __('Selamat Datang') }} {{ auth()->user()->name }}
            </h1>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kelas 1</h5>
                    <p class="card-text">Deskripsi kelas 1.</p>
                    <a href="{{ route('kelas') }}" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kelas 2</h5>
                    <p class="card-text">Deskripsi kelas 2.</p>
                    <a href="" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kelas 3</h5>
                    <p class="card-text">Deskripsi kelas 3.</p>
                    <a href="" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
