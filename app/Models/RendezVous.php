<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;
    protected $fillable = [
        'TypeRendezVous',
        'id_clt',
        'AutrePersonne',
        'status',
        'id_avocat',
        'DateHeure',
        'commentaires'
    ];
}
