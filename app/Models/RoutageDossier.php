<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutageDossier extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_dossier_Assurance',
        'id_secretary',
    ];
}
