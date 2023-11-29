<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    // Mass Assignment
    protected $fillable = [
        'name',
        'email',
        'username'
    ];

    // Default Attributes
    protected $attributes = [
        'name' => '',
        'email' => '',
        'username' => ''
    ];
}
