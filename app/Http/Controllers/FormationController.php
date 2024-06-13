<?php

namespace App\Http\Controllers;
use App\Models\Formation;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    //Ctte fonction c'est pour l'affichage des formations
    public function index()
    {
        // Récupérer toutes les formations
        $formations = Formation::all();

        // Passer les formations à la vue
        return view('formation', compact('formations'));
    }
}
