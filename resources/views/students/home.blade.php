@extends('layouts.student')

@section('content')
<div class="container">
    <h1 class="card-header text-center" style="color: #00C0EF">
        {{ __('Selamat Datang') }} {{ auth()->user()->name }}
    </h1>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" alt="Course 1 Image" src="https://img.freepik.com/free-vector/large-school-building-scene_1308-32058.jpg?w=996&t=st=1701326568~exp=1701327168~hmac=c559bab280a8a9f2216d0aab0567ce899e565bfde5d6b49aaf2c97078626a741">
                <div class="card-body">
                    <h5 class="card-title">Pelajaran 1</h5>
                    <p class="card-text">Nama Guru 1</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" alt="Course 2 Image" src="https://img.freepik.com/free-vector/large-school-building-scene_1308-32058.jpg?w=996&t=st=1701326568~exp=1701327168~hmac=c559bab280a8a9f2216d0aab0567ce899e565bfde5d6b49aaf2c97078626a741">
                <div class="card-body">
                    <h5 class="card-title">Pelajaran 2</h5>
                    <p class="card-text">Nama Guru 2</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" alt="Course 3 Image" src="https://img.freepik.com/free-vector/large-school-building-scene_1308-32058.jpg?w=996&t=st=1701326568~exp=1701327168~hmac=c559bab280a8a9f2216d0aab0567ce899e565bfde5d6b49aaf2c97078626a741">
                <div class="card-body">
                    <h5 class="card-title">Pelajaran 3</h5>
                    <p class="card-text">Nama Guru 3</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" alt="Course 4 Image" src="https://img.freepik.com/free-vector/large-school-building-scene_1308-32058.jpg?w=996&t=st=1701326568~exp=1701327168~hmac=c559bab280a8a9f2216d0aab0567ce899e565bfde5d6b49aaf2c97078626a741">
                <div class="card-body">
                    <h5 class="card-title">Pelajaran 4</h5>
                    <p class="card-text">Nama Guru 4</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
