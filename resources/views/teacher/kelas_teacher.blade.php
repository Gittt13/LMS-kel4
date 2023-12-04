@extends('layouts.teacher')

@section('content')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-11 mx-auto"> 
            
            <!-- Dashboard -->
            <div class="card-deck">
                <a href="link_to_forum" class="card text-center" style="background-color: #427D9D; border-radius: 15px; color: white; height: 75px;">
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
            <form class="mt-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Sampaikan Materi" aria-label="Sampaikan Materi" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Kirim</button>
                    </div>
                </div>
            </form>

            <!-- Card for the content -->
            <div class="card mt-4">
                <div class="card-body text-center">
                    <ion-icon name="layers-outline" style="font-size: 80px;"></ion-icon>
                    <p>Anda belum mengupload apapun.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
