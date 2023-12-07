<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasTambahan extends Model
{
    protected $table = 'kelas_tambahan';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}
