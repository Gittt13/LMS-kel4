@extends('layouts.teacher')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0">Data Absensi Murid</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Kehadiran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Murid 1</td>
                        <td>Laki-laki</td>
                        <td><span id="status1">Tidak Hadir</span></td>
                        <td><button onclick="toggleAttendance(1)">Ubah</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Murid 2</td>
                        <td>Perempuan</td>
                        <td><span id="status2">Tidak Hadir</span></td>
                        <td><button onclick="toggleAttendance(2)">Ubah</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Murid 3</td>
                        <td>Laki-laki</td>
                        <td><span id="status3">Hadir</span></td>
                        <td><button onclick="toggleAttendance(3)">Ubah</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Murid 4</td>
                        <td>Perempuan</td>
                        <td><span id="status4">Tidak Hadir</span></td>
                        <td><button onclick="toggleAttendance(4)">Ubah</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Murid 5</td>
                        <td>Laki-laki</td>
                        <td><span id="status5">Hadir</span></td>
                        <td><button onclick="toggleAttendance(5)">Ubah</button></td>
                    </tr>
                    <!-- Dan seterusnya -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function toggleAttendance(studentId) {
        const statusElement = document.getElementById(`status${studentId}`);
        const currentStatus = statusElement.innerText.trim();

        // Toggle kehadiran
        const newStatus = currentStatus === 'Hadir' ? 'Tidak Hadir' : 'Hadir';

        // Update tampilan
        statusElement.innerText = newStatus;
    }
</script>

@endsection
