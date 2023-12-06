<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeserta extends Model
{
    protected $table = 'tbl_participations';
    protected $primaryKey = 'participation_id';

    // Mass Assignment
    protected $fillable = [
        'participation_id',
        'name',
        'email',
        'date_of_birth',
        'phone'
    ];

    // Default Attributes
    protected $attributes = [
        'participation_id' => '',
        'name' => '',
        'email' => '',
        'date_of_birth' => '',
        'phone' => ''
    ];
}
