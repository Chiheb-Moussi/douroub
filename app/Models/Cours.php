<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{

    protected $fillable = [
        'classe',
        'nom_prof',
        'nom_coure',
        'annee_scolaire',
        'commentaire',
        'image',

    ];
}
