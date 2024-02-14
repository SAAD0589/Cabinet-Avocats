<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnuaireTelephonique extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'QualiteService',
        'Nomcomplet',
        'NumeroTelephoneFixe',
        'telephonePortable',
        'TypeUtilisateur',
        'email'
    ];
}
