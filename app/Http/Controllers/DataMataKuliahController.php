<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMataKuliahController extends Controller
{
    public function index()
    {
        return view('admin.data-mata-kuliah');
    }
}
