@extends('layouts.student')

@section('content')
<div class="container mt-2">
    <!-- Assuming you have a card for displaying and updating student grades -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Nilai Siswa - Kelas 1</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Nilai</th>
                        <th>Ubah Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Student 1 -->
                    <tr>
                        <td>1</td>
                        <td>Nama Siswa 1</td>
                        <!-- Assuming you have a way to get and display the grades for each student -->
                        <td id="grade1">{{ $studentGrades[1] ?? '' }}</td>
                        <td>
                            <div class="input-group">
                                <input type="number" id="inputGrade1" class="form-control" placeholder="Input Grade">
                                <div class="input-group-append">
                                    <button type="button" onclick="updateGrade(1)" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Student 2 -->
                    <tr>
                        <td>2</td>
                        <td>Nama Siswa 2</td>
                        <!-- Assuming you have a way to get and display the grades for each student -->
                        <td id="grade2">{{ $studentGrades[2] ?? '' }}</td>
                        <td>
                            <div class="input-group">
                                <input type="number" id="inputGrade2" class="form-control" placeholder="Input Grade">
                                <div class="input-group-append">
                                    <button type="button" onclick="updateGrade(2)" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Repeat the structure for other students -->

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function updateGrade(studentNumber) {
        // Get the input value
        var inputGrade = document.getElementById('inputGrade' + studentNumber).value;

        // Update the displayed grade
        document.getElementById('grade' + studentNumber).innerText = inputGrade;
    }
</script>
@endsection
