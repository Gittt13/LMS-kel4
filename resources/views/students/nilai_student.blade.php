@extends('layouts.student')

@section('content')
<div class="container mt-5 bg-white p-4 rounded">
    <h2>Tampilan Nilai</h2>
    
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kelas</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        @foreach ($nilai as $item)
        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->nilai }}</td>
            </tr>
            <!-- Tambahkan baris ini untuk setiap data nilai yang Anda miliki -->
        </tbody>
        @endforeach
    </table>
</div>
@endsection