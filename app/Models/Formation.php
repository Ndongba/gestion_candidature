<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'date_debut',
        'date_fin',
        'nombre_place',
        'etat',
        'image',
        'date_debut_appel',
        'date_fin_appel',
    ];
}
