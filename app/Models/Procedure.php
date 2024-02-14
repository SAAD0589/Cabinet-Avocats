<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $fillable = [
        'seance_id',
        'dossier_tr_id',
        'procedure_name',
        'incharage',
        'procedure_type',
        'date_procedure',
        'status',
        'resp_remarque',
        'date_responsable',
        'isDeleted'
     ];
}
