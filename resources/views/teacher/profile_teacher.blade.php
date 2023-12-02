@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0">Profil Guru</h1>
        </div>
        <div class="card-body">
            <div class="text-center mb-4">
                <i class="fas fa-user-circle fa-5x text-primary"></i>
            </div>

            <!-- View Mode -->
            <div id="viewMode">
                <h2 class="card-title text-center mb-3">John Doe</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Mata Pelajaran:</strong> Matematika</li>
                    <li class="list-group-item"><strong>Email:</strong> johndoe@example.com</li>
                    <li class="list-group-item"><strong>No. HP:</strong> 081234567890</li>
                    <li class="list-group-item"><strong>Alamat:</strong> Jl. Contoh No. 123</li>
                </ul>
            </div>

            <!-- Edit Form -->
            <form id="editForm" method="post" action="{{ url('/teacher/update') }}" style="display: none;">
                @csrf
                <div class="form-group">
                    <label for="subject">Mata Pelajaran:</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="Matematika">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="johndoe@example.com">
                </div>
                <div class="form-group">
                    <label for="phone">No. HP:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="081234567890">
                </div>
                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <input type="text" class="form-control" id="address" name="address" value="Jl. Contoh No. 123">
                </div>
                <!-- Add more fields as needed -->
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>

            <!-- Toggle Edit Mode Button -->
            <div class="text-center mt-4">
                <button onclick="toggleEdit()" class="btn btn-primary">Edit Profil</button>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleEdit() {
        const viewMode = document.getElementById('viewMode');
        const editForm = document.getElementById('editForm');

        if (viewMode.style.display === 'none' || viewMode.style.display === '') {
            // Show edit form and hide view mode
            viewMode.style.display = 'none';
            editForm.style.display = 'block';
        } else {
            // Show view mode and hide edit form
            viewMode.style.display = 'block';
            editForm.style.display = 'none';
        }
    }
</script>
@endsection
