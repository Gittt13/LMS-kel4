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
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nama:</strong> John Doe</li>
                        <li class="list-group-item"><strong>Alamat:</strong> 123 Street, City</li>
                        <li class="list-group-item"><strong>Email:</strong> john@example.com</li>
                        <li class="list-group-item"><strong>No. HP:</strong> 123-456-7890</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('edit-profil') }}" class="btn btn-primary">Edit Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection