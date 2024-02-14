<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliotheque extends Model
{
    use HasFactory;
    protected $fillable = [
        'action',
        'parties',
        'Date_Seance',
        'Avocat',
        'date_dossier',
        'date_insert_dossier',
        'date_back_dossier',
        'isDeleted',
        'seance_id'
    ];
}
