<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasTambahanController extends Controller
{
    public function index()
    {
        return view('admin/kelas-tambahan/halaman');
    }
}
