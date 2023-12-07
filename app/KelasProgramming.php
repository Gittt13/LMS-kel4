<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasProgramming extends Model
{
    protected $table = 'kelas_programming';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}
