@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-orange text-white text-center">
            <h1 class="mb-0">Data Mata Pelajaran Kelas Tambahan</h1>
        </div>
        <div class="card-header text-right">
            <a href="{{ route('admin.kelas-tambahan.tambah') }}" class="btn btn-primary" role="button">Tambah Pelajaran</a>
        </div>
        <table class="table table-hover mb-0 table table-bordered" id="data-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Mata Pelajaran</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas_tambahans as $kelas_tambahan)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $kelas_tambahan->nama }}</td>
                    <td>{{ $kelas_tambahan->deskripsi }}</td>
                    <td>
                        <a href="{{ route('admin.kelas-tambahan.edit', $kelas_tambahan->id) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
                        <form action="{{ route('admin.kelas-tambahan.hapus', $kelas_tambahan->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<!-- Masukkan script jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Masukkan script DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- Inisialisasi DataTables -->
<script>
    $(document).ready(function() {
        $('#data-table').DataTable({
            "paging": true,
            "searching": true
        });
    });
</script>
@endsection
