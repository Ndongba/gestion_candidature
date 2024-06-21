<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CandidatureStatusUpdated;

class AdminController extends Controller
{
    //  Liste des tous les Candidates dans les different candidatures
    public function listeDesCandidats(){
        $formation = Formation::all();
        $candidatures = Candidature::all();
        return view('admins.candidats.liste', compact('candidatures','formation'));
    }


 
    public function listeCandidats($id)
    {
        $formation = Formation::find($id);
        $candidatures = $formation->candidatures()->with('user')->get();
        return view('admins.candidats.index', compact('formation', 'candidatures'));
    }

    public function detailCandidat($formationId, $candidatureId)
    {
        // Récupérer la candidature en fonction de son ID
        $candidatures = Candidature::all();
        $candidature = Candidature::findOrFail($candidatureId);
        $formation = Formation::findOrFail($formationId);

        // Passer les données à la vue candidature.show.blade.php
        return view('admins.candidats.detail', compact('formation', 'candidatures', 'candidature'));
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
       
        $user = User::find($candidature->user_id);

        // Envoyer une notification via Laravel
        // Notification::send($user, new CandidatureStatusUpdated($candidature));


        

        return redirect()->route('candidature.detail', ['formation' => $formationId, 'candidature' => $candidatureId])
                         ->with('success', 'État de la candidature mis à jour avec succès.');
    }
  
    
}
