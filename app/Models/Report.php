<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_R',
        'Num_Doc_R',
        'judicial_commisioner',
        'procedure',
        'dossier_id',
        'trib_reference',
        'status',
        'type_dossier'
    ];
}
