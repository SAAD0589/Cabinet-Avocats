<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recuperation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_clt',
        'id_type_dossier',
        'reference',
        'enmy',
        'date_Rec',
        'name_Rec',
        'num_Rec',
        'adr_Rec',
        'id_ville',
        'id_trib',
        'id_userOffice',
        'id_folder_recs',
        'id_type_recs',
        'isDeleted'
     ];
}
