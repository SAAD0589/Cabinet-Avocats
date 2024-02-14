<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avocat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'LastName',
        'Specialise',
        'tel',
        'email',
        'Adr',
        'status',
        'comment',
    ];
}
