<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructurKelasController extends Controller
{
    public function index()
    {
        return view('admin/instructur-kelas/halaman');
    }
}
