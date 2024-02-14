<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'id_clt',
        'couleur',
        'date_ref',
        'id_avocat',
        'Adversaire',
        'avocat_Adversaire',
        'Adresse_Adversaire',
        'type_clt',

        'e1_trib',
        'e1_ville',
        'e1_reference_trib',
        'e1_type_dossier',
        'e1_sale_nim',
        'juge',
        'e1_heure',
        'e1_jugement_num',
        'e1_date_jugement',
        'e1_prejudice',
        'e1_jugement',
        'e1_decision',

        'e2_refereence_cour',
        'e2_cours_apel',
        'e2_salle',
        'e2_migistrat',
        'e2_heure',
        'e2_date_dec',
        'e2_sent_num',
        'criminal',
        'e2_dec',
        
        
        'e3_sent_num',
        'e3_reference',
        'e3_migistrat',
        'e3_date_sent',
        'e3_cour_cas',
        
       
        
        
       
        
       
        'observation'
    ];
}
