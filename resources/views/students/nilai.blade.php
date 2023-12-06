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
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Matematika</td>
                <td>85</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Bahasa Inggris</td>
                <td>92</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>IPA</td>
                <td>78</td>
            </tr>
            <!-- Tambahkan baris ini untuk setiap data nilai yang Anda miliki -->
        </tbody>
    </table>
</div>
@endsection