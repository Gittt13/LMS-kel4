@extends('layouts.teacher')

@section('content')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-11 mx-auto"> 
            
            <!-- Dashboard -->
            
            <div class="card-deck">
                <a href="{{ route('kelas') }}" class="card text-center" style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <ion-icon name="chatbubble-outline" style="font-size: 25px;"></ion-icon>
                        <h5 style="font-size: small;">Forum</h5>
                    </div>
                </a>
                <a href="{{ route('tugas.teacher') }}" class="card text-center " style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <ion-icon name="document-outline" style="font-size: 25px;"></ion-icon>
                        <h5 style="font-size: small;">Tugas</h5>
                    </div>
                </a>
                <a href="{{ route('anggota') }}" class="card text-center" style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <ion-icon name="people-outline" style="font-size: 25px;"></ion-icon>
                        <h5 style="font-size: small;">Anggota</h5>
                    </div>
                </a>
            </div>
            <!-- End Dashboard -->
            <div class="card text-center" style="background-color: #164863; border-radius: 15px; color: white; height: 170px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <ion-icon name="book-outline" style="font-size: 80px;"></ion-icon>
                    <h4>Nama Kelas</h4>
                </div>
            </div>


            <div class="mt-4">
                <!-- Tombol Tampilkan Form Upload Tugas -->
                <button class="btn btn-primary mt-3" onclick="toggleUploadForm()">Upload Tugas</button>
                
                <!-- Form Upload Tugas (Awalnya Disembunyikan) -->
                <div class="card" id="uploadFormCard" style="display: none;">
                    <div class="card-body">
                        <h5 class="card-title">Unggah Tugas</h5>
                        <form id="uploadForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Judul Tugas</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="file" class="mb-1">Unggah File Tugas</label>
                                <input type="file" class="form-control" id="file" name="file" required>
                            </div>
                            <div class="form-group">
                                <label for="dueDate">Batas Waktu</label>
                                <input type="datetime-local" class="form-control" id="dueDate" name="dueDate" required>
                            </div>
                            <button type="button" onclick="uploadFile()" class="btn btn-primary">Unggah Tugas</button>
                        </form>
                    </div>
                </div>
                <!-- End Form Upload Tugas -->

                <!-- Tugas yang Diunggah -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Tugas yang Diunggah</h5>
                        <ul id="uploadedTasksList">
                            <!-- Daftar tugas yang diunggah akan ditampilkan di sini -->
                        </ul>
                    </div>
                </div>
                <!-- End Tugas yang Diunggah -->
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function toggleUploadForm() {
        var uploadFormCard = document.getElementById('uploadFormCard');
        if (uploadFormCard.style.display === 'none') {
            uploadFormCard.style.display = 'block';
        } else {
            uploadFormCard.style.display = 'none';
        }
    }

    function uploadFile() {
        // Di sinilah Anda menangani unggahan berkas
        // Anda dapat menggunakan JavaScript untuk memanipulasi DOM dan menampilkan tugas yang diunggah
        // Misalnya, Anda dapat menambahkan elemen daftar baru ke dalam uploadedTasksList

        // Dapatkan judul dan nama berkas yang diunggah
        var title = document.getElementById('title').value;
        var fileName = document.getElementById('file').value.split('\\').pop();

        // Buat elemen daftar baru
        var listItem = document.createElement('li');
        listItem.innerHTML = `<strong>${title}</strong>: ${fileName}`;

        // Buat elemen daftar dapat diklik untuk membuka tugas
        listItem.addEventListener('click', function() {
            // Di sini, Anda dapat mengimplementasikan logika untuk membuka tugas yang diunggah
            // Misalnya, Anda dapat mengalihkan ke halaman baru atau menampilkan konten tugas
            alert('Buka Tugas: ' + fileName);
        });

        // Tambahkan elemen daftar ke dalam uploadedTasksList
        document.getElementById('uploadedTasksList').appendChild(listItem);

        // Reset formulir setelah unggah
        document.getElementById('uploadForm').reset();
    }
</script>
