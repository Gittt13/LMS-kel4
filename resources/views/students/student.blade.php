@extends('layouts.student')

@section('content')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <div class="container">
        <h1 class="card-header text-center" style="color: #00C0EF">
            {{ __('Selamat Datang') }} {{ auth()->user()->name }}
        </h1>
        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body" style="background-color: #00C0EF">
                        <ion-icon name="people-outline" style="font-size: 90px; color: white"></ion-icon>
                        <h3 class="text-white">Tugas</h3>
                        <h3 class="text-white">66</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="background-color: #00C0EF">
                    <div class="card-body">
                        <ion-icon name="people-outline" style="font-size: 90px; color: white"></ion-icon>
                        <h3 class="text-white">Tugas</h3>
                        <h3 class="text-white">66</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="background-color: #00C0EF">
                    <div class="card-body">
                        <ion-icon name="people-outline" style="font-size: 90px; color: white"></ion-icon>
                        <h3 class="text-white">Tugas</h3>
                        <h3 class="text-white">66</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="background-color: #00C0EF">
                    <div class="card-body">
                        <ion-icon name="people-outline" style="font-size: 90px; color: white"></ion-icon>
                        <h3 class="text-white">Tugas</h3>
                        <h3 class="text-white">66</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
