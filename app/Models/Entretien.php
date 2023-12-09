<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
  
    protected $fillable = [
        'date',
        'heure',
        'user_id',
    
    ]; 
}
