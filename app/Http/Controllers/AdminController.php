<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Candidature;
use App\Models\Notification;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //  ListeCandidates

    

 
    public function listeCandidats($id)
    {
        $formation = Formation::find($id);
        $candidatures = $formation->candidatures()->with('user')->get();
        return view('admins.candidats.index', compact('formation', 'candidatures'));
    }

    public function detailCandidat($formationId, $candidatureId)
    {
        // Récupérer la candidature en fonction de son ID
        $candidature = Candidature::findOrFail($candidatureId);
        $formation = Formation::findOrFail($formationId);

        // Passer les données à la vue candidature.show.blade.php
        return view('admins.candidats.detail', compact('formation', 'candidature'));
    }

    public function updateStatus(Request $request, $formationId, $candidatureId)
    {
        // Validation des données de la requête
        $request->validate([
            'etat' => 'required|in:en_evaluation,en_attente,accepter,refuser',
        ]);

        // Récupérer la candidature et mettre à jour l'état
        $candidature = Candidature::findOrFail($candidatureId);
        $candidature->etat = $request->input('etat');
        $candidature->save();
        Notification::create([
            'message' => "L'état de votre candidature a été mis à jour à : " . $request->input('etat'),
            'user_id' => $candidature->user_id,
        ]);


        return redirect()->route('candidature.detail', ['formation' => $formationId, 'candidature' => $candidatureId])
                         ->with('success', 'État de la candidature mis à jour avec succès.');
    }
  
    
}
