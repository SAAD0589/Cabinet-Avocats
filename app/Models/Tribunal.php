<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribunal extends Model
{
    use HasFactory;
    protected $fillable = [
        'trib_nom',
        'id_type',
        'Abreviation',
        'id_reg'
        ];
}
