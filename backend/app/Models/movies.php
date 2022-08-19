<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
     protected $fillable = [
        'img',
        'titulo',
        'date',
        'qualification',
        'qualificationFull',
        'favorite',
        'describe',
        'runtime',
        'mmpa',
        'release',
        'Director',
        'stars'
    ];
}
