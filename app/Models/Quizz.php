<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
   

    protected $fillable = [
        'language',
        'question',
        'choix',
        'choixa',
        'choixb',
        'choixc',
        'choixd',
        'reponse', 
    ];
}
