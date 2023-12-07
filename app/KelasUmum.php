<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasUmum extends Model
{
    protected $table = 'kelas_umum';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}
