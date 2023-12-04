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
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" value="John Doe">
                        </div>
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
                        <button type="button" onclick="saveChanges()" class="btn btn-primary">Simpan Perubahan</button>
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

    function saveChanges() {
    // Implement logic to save changes (update view mode with form values)
    const nameValue = document.getElementById('name').value; // Tambah baris ini
    const subjectValue = document.getElementById('subject').value;
    const emailValue = document.getElementById('email').value;
    const phoneValue = document.getElementById('phone').value;
    const addressValue = document.getElementById('address').value;

    // Update view mode with new values
    document.getElementById('viewMode').querySelector('h2').textContent = nameValue; // Ganti subjectValue dengan nameValue
    const listItems = document.getElementById('viewMode').querySelectorAll('ul.list-group-flush li');
    listItems[0].textContent = 'Mata Pelajaran: ' + subjectValue;
    listItems[1].textContent = 'Email: ' + emailValue;
    listItems[2].textContent = 'No. HP: ' + phoneValue;
    listItems[3].textContent = 'Alamat: ' + addressValue;

    // Show view mode and hide edit form
    document.getElementById('viewMode').style.display = 'block';
    document.getElementById('editForm').style.display = 'none';
}

</script>
@endsection
