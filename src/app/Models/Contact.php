<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name-first',
        'name-last',
        'gender',
        'mail',
        'post',
        'address',
        'building',
        'opinion',
    ];
}
