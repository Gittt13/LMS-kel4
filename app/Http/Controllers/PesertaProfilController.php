<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaProfilController extends Controller
{
    public function index()
    {
        return view('admin/peserta-profil/halaman');
    }
}
