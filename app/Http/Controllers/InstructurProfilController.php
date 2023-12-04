<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructurProfilController extends Controller
{
    public function index()
    {
        return view('admin/instructur-profil/halaman');
    }
}
