<?php

namespace App\Http\Controllers;
use App\Models\Formation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
{


    public function Detail($id){

        $formation=Formation::find($id);
        return view('candidates.formations.detailformation', compact('formation'));
    }


    //Ctte fonction c'est pour l'affichage des formations
    public function index()
    {

        // Récupérer toutes les formations
        $formations = Formation::all();

        // Passer les formations à la vue
        return view('candidates.formations.formation', compact('formations'));
    }


    public function afficherFormation(){

        $formations = Formation::all();
        return view('admins.formations.listeformations', compact('formations'));
    }
    //ajoutformation
    public function ajoutformation(){
        $formations = Formation::all();

        return view('admins.formations.ajoutformation', compact('formations'));
    }
 


    public function store(Request $request)
{
    $request->validate([
        // 'libelle' => 'required|string|max:255',
        // 'date_debut_appel' => 'required|date',
        // 'date_fin_appel' => 'required|date',
        // 'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Validation du fichier
        // 'etat' => 'required|in:ouvert,fermer',
        // 'date_debut' => 'required|date',
        // 'date_fin' => 'required|date',
        
    ]);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filePath = $file->store('uploads', 'public'); 

    Formation::create([
        'libelle' => $request->libelle,
        'date_debut_appel' => $request->date_debut_appel,
        'date_fin_appel' => $request->date_fin_appel,
        'image' => $filePath ?? null,
        'etat' => $request->etat,
        'description' => $request->description,
        'date_debut' => $request->date_debut,
        'date_fin' => $request->date_fin,
        'nombre_place' => $request->nombre_place,
    ]);

    return redirect()->route('formations.afficher')->with('success', 'Formation ajoutée avec succès!');
}


}

public function destroy($id)
{
    $formation = Formation::findOrFail($id);
    $formation->delete();

    return redirect()->route('formations.afficher')->with('status', 'La formation a été supprimé avec succès.');
}



public function modifierFormation($id){
    $formations = Formation::find($id);
    return view('admins.formations.modifierformation', compact('formations'));
}
public function modifierFormationTraitement(Request $request){
    $formations = Formation::find($request->id);
    $formations->libelle = $request->libelle;
    $formations->nombre_place = $request->nombre_place;
    $formations->description = $request->description;
    $formations->date_debut = $request->date_debut;
    $formations->date_fin = $request->date_fin;
    $formations->etat = $request->etat;
    // $formations->image = $request->image;
    $formations->date_debut_appel = $request->date_debut_appel;
    $formations->date_fin_appel = $request->date_fin_appel;

    $formations->update();
    return redirect()->route('formations.afficher');
}

}
