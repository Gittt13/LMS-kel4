<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDosenController extends Controller
{
    public function index()
    {
        return view('admin.data-dosen');
    }
}
