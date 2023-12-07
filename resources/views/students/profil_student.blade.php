@extends('layouts.student')

@section('content')

    <body class="bg-light">

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                            <h2>User Profile</h2>
                        </div>
                        <div class="card-body">
                            @foreach ($profil as $item)
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Nama: </strong>{{ $item->nama }}</li>
                                    <li class="list-group-item"><strong>Alamat: </strong>{{ $item->alamat }}</li>
                                    <li class="list-group-item"><strong>Email: </strong>{{ $item->email }}</li>
                                    <li class="list-group-item"><strong>No. HP: </strong>{{ $item->no_hp }}</li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('profil.edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit Profil</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection
