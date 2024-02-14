<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;
    
 protected $fillable = [
    'id_clt',
    'reference',
    'Date_Reception_Dossier',
    'Methode_Affectation',
    'isFirst',
    'NumeroRapportPoliceJudiciaire',
    'MinisterePublicNon',
    'Suivi_M_AgentRoi',
    'NumeroDossier',
    'id_tribunals',

];
}
