<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
    protected $fillable = [
        'Avocat',
        'Date_Seance',
        'action',
        'action1',
        'avocat2',
        'juge',
        'comment',
        'dossier_tr_id',
        'status'
          
    ];
}
