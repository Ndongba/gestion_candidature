<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;
use App\Mail\DecisionCandidature;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Notifications\CandidatePostuler;
use Illuminate\Support\Facades\Notification;


class CandidatureController extends Controller
{
  
    public function ajouter_candidature($id){
        $formation=Formation::find($id);
        // $notifications = Auth::user()->notifications;


        return view('candidates.candidatures.candidature', compact('formation',));
    
    }


  
       
            public function traitement_candidature(Request $request)
            {
                $request->validate([
                    'formation_id' => 'required',
                    'biographie' => 'required',
                    'motivation' => 'required',
                    'cv' => 'required|file|mimes:jpeg,png,gif,svg,jpg,pdf|max:2048',
                ]);
            
                // Vérifier si le candidat a déjà postulé à cette formation
                $candidat = auth()->id();
                $formation_id = $request->input('formation_id');
            
                $existingCandidature = Candidature::where('user_id', $candidat)
                    ->where('formation_id', $formation_id)
                    ->first();
            
                if ($existingCandidature) {
                    return redirect()->back()->with('error', 'Vous avez déjà postulé à cette formation.');
                }
            
                // Stockage du fichier CV
                $image = null;
                if ($request->hasFile('cv')) {
                    $chemin_image = $request->file('cv')->store('public/cv');
                    if (!$chemin_image) {
                        return redirect()->back()->with('error', 'Erreur lors du téléchargement du fichier.');
                    }
                    $image = basename($chemin_image);
                }
            
                // Créer une candidature avec les données validées et le chemin de l'image
                $data = $request->all();
                $data['cv'] = $image;
                $data['user_id'] = $candidat;
                $data['etat'] = 'en_evaluation';
            
                $candidature = Candidature::create($data); // Enregistrer la candidature dans la base de données
            
                $user = User::find($candidature->user_id);
            
                // Envoyer une notification via Laravel
                Notification::send($user, new CandidatePostuler($candidature));
            
                return redirect()->route('candidature.afficher')->with('success', 'Votre candidature a été soumise avec succès.');
            }
            
            public function afficher_candidature(){
                $candidat=auth()->id();

                $candidatures = Candidature::where('user_id', $candidat)->get();
               

                return view('candidates.candidatures.affiche_candidature', compact('candidatures'));
                
                
            }


            public function detail_candidature(){
                $notifications = Auth::user()->notifications;

                return view('detail_affiche_candidature','notifications');
            }



}
