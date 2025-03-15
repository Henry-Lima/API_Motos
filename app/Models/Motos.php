<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motos extends Model
{
    protected $fillable = [
        'modelo',
        'marca',
        'ano',
    ];
}
