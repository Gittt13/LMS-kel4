<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilStudent extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'email',
        'no_hp'
    ];
}
