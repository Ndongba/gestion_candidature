<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $fillable = [
        'biographie',
        'motivation',
        'etat',
        'user_id',
        'formation_id'
    ];
   
}
