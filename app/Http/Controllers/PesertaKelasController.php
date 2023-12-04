<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaKelasController extends Controller
{
    public function index()
    {
        return view('admin/peserta-kelas/halaman');
    }
}
