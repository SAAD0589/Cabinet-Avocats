<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribunals_dossiers extends Model
{
    use HasFactory;
    protected $fillable = [
        'tribunal_id',
        'ville',
        'reference_trib',
        'type_dossier',
        'sale_num',
        'juge',
        'heure',
        'jugement',
        'date_jugement',
        'type_tribunal',
        'prejudice',
        'dossier_id'
    ];
}
