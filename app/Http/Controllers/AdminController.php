<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CandidatureStatusUpdated;

class AdminController extends Controller
{
   

    public function index(Request $request, $formation_id)
    {
$password= 123456;
        
        $querye = $request->input('s');
    
        $formation = Formation::findOrFail($formation_id);
    
        $candidatures = $formation->candidatures()
            ->when($querye, function ($query) use ($querye) {
                $query->where(function($q) use ($querye) {
                    $q->where('biographie', 'LIKE', "%{$querye}%")
                      ->orWhere('motivation', 'LIKE', "%{$querye}%")
                      ->orWhereHas('user', function ($q) use ($querye) {
                          $q->where('prenom', 'LIKE', "%{$querye}%")
                            ->orWhere('nom', 'LIKE', "%{$querye}%")
                            ->orWhere('email', 'LIKE', "%{$querye}%")
                            ->orWhere('telephone', 'LIKE', "%{$querye}%");
                      });
                });
            })
            ->orderBy('created_at', 'desc')->paginate(10);
    
        return view('admins.candidats.index', compact('formation', 'candidatures', 'querye'));
    }
    

  

   
    public function filterByEtat($formation_id, $etat)
    {
        $formation = Formation::findOrFail($formation_id);
        $candidatures = $formation->candidatures()->where('etat', $etat)->orderBy('created_at', 'desc')->paginate(10);

        return view('admins.candidats.index', compact('formation', 'candidatures', 'etat'));
    }

    
    //  Liste des tous les Candidates dans les different candidatures
    public function listeDesCandidats(){
        $formation = Formation::all();
        $candidatures = Candidature::paginate(7);
        return view('admins.candidats.liste', compact('candidatures','formation'));
    }

    public function filterCandidatures(Request $request)
    {
        // Récupérer l'état filtré depuis les paramètres de la requête
        $etat = $request->query('etat');

        // Récupérer la formation (assurez-vous de définir comment vous récupérez la formation)
        $formation = Formation::findOrFail($request->query('formation_id'));

        // Filtrer les candidatures en fonction de l'état
        if ($etat === 'accepter' || $etat === 'en_attente' || $etat === 'en_evaluation' || $etat === 'refuser') {
            $candidatures = $formation->candidatures->where('etat', $etat);
        } else {
            // Si aucun état spécifique n'est demandé, retourner toutes les candidatures
            $candidatures = $formation->candidatures;
        }

        // Passer les données à la vue appropriée
        return view('admins.candidats.index', compact('formation', 'candidatures', 'etat'));
    }
 
    public function listeCandidats($id)
    {
        $formation = Formation::find($id);
        $candidatures = $formation->candidatures()->with('user')->paginate(10);
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
        Notification::send($user, new CandidatureStatusUpdated($candidature));


        

        return redirect()->route('candidature.detail', ['formation' => $formationId, 'candidature' => $candidatureId])
                         ->with('success', 'État de la candidature mis à jour avec succès.');
    }
  
    
}
