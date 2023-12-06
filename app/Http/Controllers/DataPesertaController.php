<?php

namespace App\Http\Controllers;

use App\DataPeserta;
use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    public function index()
    {
        $data_pesertas = DataPeserta::all();  //select * from data_pesertas
        return view('admin/data-peserta/data_peserta', compact('data_pesertas'));
    }
}
