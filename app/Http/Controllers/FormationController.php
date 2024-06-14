<?php

namespace App\Http\Controllers;
use App\Models\Formation;

use Illuminate\Http\Request;

class FormationController extends Controller
{

    public function Detail(){
        return view('detailformation');
    }
    //Ctte fonction c'est pour l'affichage des formations
    public function index()
    {
        // Récupérer toutes les formations
        $formations = Formation::all();

        // Passer les formations à la vue
        return view('formation', compact('formations'));
    }


    public function afficherFormation(){
        $formations = Formation::all();
        return view('admins.formations.listeformation', compact('formations'));
    }
    
    public function modifierFormation($id){
        $formations = Formation::find($id);
        return view('admins.formations.modifierformation', compact('formations'));
    }
    public function modifierFormationTraitement(Request $request){
        $formations = Formation::find($request->id);
        $formations->libelle = $request->libelle;
        $formations->description = $request->description;
        $formations->date_debut = $request->date_debut;
        $formations->date_fin = $request->date_fin;
        $formations->etat = $request->etat;
        $formations->image = $request->image;
        $formations->date_debut_appel = $request->date_debut_appel;
        $formations->date_fin_appel = $request->date_fin_appel;

        $formations->update();
        return redirect()->route('afficherFormation');
    }
}
