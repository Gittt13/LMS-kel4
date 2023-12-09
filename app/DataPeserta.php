<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeserta extends Model
{
    protected $table = "data_peserta";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'foto',
        'nama',
        'email',
        'alamat',
        'nomor_telepon',
        'jenis_kelamin',
    ];
    protected $attributes = [
        'id' => '',
        'foto' => '',
        'nama' => '',
        'email' => '',
        'alamat' => '',
        'nomor_telepon' => '',
        'jenis_kelamin' => ''
    ];
}