<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataJurusanController extends Controller
{
    public function index()
    {
        return view('admin.data-jurusan');
    }
}
