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

    public function ajoutformation()
    {
        return view('ajoutformation');
    }

    public function store(Request $request)
{
    $request->validate([
        'titre' => 'required|string|max:255',
        'date_debut_appel' => 'required|date',
        'date_fin_appel' => 'required|date',
        'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Validation du fichier
        'etat' => 'required|in:ouvert,fermer',
        'date_debut' => 'required|date',
        'date_fin' => 'required|date',
        
    ]);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filePath = $file->store('uploads', 'public'); 

    Formation::create([
        'libelle' => $request->titre,
        'date_debut_appel' => $request->date_debut_appel,
        'date_fin_appel' => $request->date_fin_appel,
        'image' => $filePath ?? null,
        'etat' => $request->etat,
        'description' => $request->description,
        'date_debut' => $request->date_debut,
        'date_fin' => $request->date_fin,
        'nombre_place' => $request->nombre_place,
    ]);

    return redirect()->route('formations')->with('success', 'Formation ajoutée avec succès!');
}

}

public function destroy($id)
{
    $formation = Formation::findOrFail($id);
    $formation->delete();

    return redirect()->route('formations')->with('status', 'La formation a été supprimé avec succès.');
}

}
