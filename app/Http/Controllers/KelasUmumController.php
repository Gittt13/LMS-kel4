<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasUmumController extends Controller
{
    public function index()
    {
        return view('admin/kelas-umum/halaman');
    }
}