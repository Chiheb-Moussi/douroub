<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
   
    protected $fillable = [
        'classe',
        'chapitre',
        'nom_prof',
        'nom_coure',
        'annee_scolaire',
        'commentaire',
        'image',
        'urlV'

    ];
}
