<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizAng extends Model
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
