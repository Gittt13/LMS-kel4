<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    public function index()
    {
        return view('admin.data-mahasiswa');
    }
}
