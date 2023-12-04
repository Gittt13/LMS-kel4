<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasProgrammingController extends Controller
{
    public function index()
    {
        return view('admin/kelas-programming/halaman');
    }
}
