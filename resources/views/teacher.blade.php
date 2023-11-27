@extends('layouts.teacher')

@section('content')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-11 mx-auto"> 
            <div class="card text-center" style="background-color: cornflowerblue; border-radius: 15px; color: white; height: 170px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <ion-icon name="book-outline" style="font-size: 80px;" ></ion-icon>
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
            <div class="mt-4 text-center">
                <ion-icon name="layers-outline" style="font-size: 80px;" ></ion-icon>
                <p>Anda belum mengupload apapun.</p>
            </div>
        </div>
    </div>
</div>
@endsection
