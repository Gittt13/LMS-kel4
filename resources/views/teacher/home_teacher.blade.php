@extends('layouts.teacher')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha384-rB5lOXDLcYZ+tiQ3+O1aP10I1cZPWe0A9lE9FLVxThAJI1ktbb5C6IMFAdAMQpeK" crossorigin="anonymous">

<div class="container mt-4">
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
                    <i class="fas fa-chalkboard fa-3x mb-3"></i>
                    <h5 class="card-title">Kelas 1</h5>
                    <p class="card-text">Deskripsi kelas 1.</p>
                    <a href="{{ route('kelas') }}" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <i class="fas fa-chalkboard fa-3x mb-3"></i>
                    <h5 class="card-title">Kelas 2</h5>
                    <p class="card-text">Deskripsi kelas 2.</p>
                    <a href="" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <i class="fas fa-chalkboard fa-3x mb-3"></i>
                    <h5 class="card-title">Kelas 3</h5>
                    <p class="card-text">Deskripsi kelas 3.</p>
                    <a href="" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
