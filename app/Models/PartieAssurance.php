<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartieAssurance extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_assurances',
        'AutreCompagnieAssurance',
        'Assure',
        'RevendicationsMatiereDroitsCiviques',
    ];
}
