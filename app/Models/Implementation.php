<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Implementation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_R',
        'folder_implentaire_num',
        'implementation_num',
        'procedure',
        'dossier_id',
        'trib_reference',
        'status',
        'type_dossier'
    ];
}
