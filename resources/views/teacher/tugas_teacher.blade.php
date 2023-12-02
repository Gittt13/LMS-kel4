@extends('layouts.teacher')

@section('content')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<div class="container mt-4">
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
                <a href="{{ route('tugas') }}" class="card text-center " style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <ion-icon name="document-outline" style="font-size: 25px;"></ion-icon>
                        <h5 style="font-size: small;">Tugas</h5>
                    </div>
                </a>
                <a href="link_to_anggota" class="card text-center" style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <ion-icon name="people-outline" style="font-size: 25px;"></ion-icon>
                        <h5 style="font-size: small;">Anggota</h5>
                    </div>
                </a>
            </div>
            <!-- Dashboard -->

            <div class="card text-center" style="background-color: #164863; border-radius: 15px; color: white; height: 170px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <ion-icon name="book-outline" style="font-size: 80px;"></ion-icon>
                    <h4>Nama Kelas</h4>
                </div>
            </div>
            <div>
                <!-- Form Upload Tugas -->
                    <!-- <form id="uploadForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file" class="mb-1">Unggah Tugas</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                        <button type="button" onclick="uploadFile()" class="btn btn-primary">Upload</button>
                    </form> -->
                    <!-- End Form Upload Tugas -->
            </div>
        </div>
    </div>
</div>
@endsection

<!-- <script>
    function uploadFile() {
        // Mendapatkan elemen input file
        var fileInput = document.getElementById('file');

        // Mengecek apakah file dipilih
        if (fileInput.files.length > 0) {
            // Mendapatkan file yang dipilih
            var file = fileInput.files[0];

            // Lakukan pengolahan atau pengiriman ke server di sini
            // Untuk contoh, kita hanya menampilkan informasi file
            console.log('File Name:', file.name);
            console.log('File Size:', file.size);
            console.log('File Type:', file.type);

            // Reset formulir setelah upload
            document.getElementById('uploadForm').reset();
        } else {
            alert('Silakan pilih file terlebih dahulu.');
        }
    }
</script> -->

