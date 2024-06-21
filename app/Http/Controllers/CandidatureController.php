<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Mail\DecisionCandidature;

class CandidatureController extends Controller
{
  
    public function ajouter_candidature($id){
        $formation=Formation::find($id);
       

        return view('candidates.candidatures.candidature', compact('formation'));
    
    }


    public function traitement_candidature(Request $request){

       
        $request->validate([
            
            'formation_id' => 'required',
            'biographie' => 'required',
            'motivation' => 'required',
            'cv' => 'required|file|mimes:jpeg,png,gif,svg,jpg,pdf|max:2048',

            
        ]);

            $candidat=auth()->id();
                $image= null;
            //verification si le fichier est uploadé
            if($request->hasFile('cv')){
                //stockage de l'image
                $chemin_image=$request->file('cv')->store('public/cv');
                //verifiaction si le chemin de l'image est bien généré
                if(!$chemin_image){
                    return redirect()->back()->with('error', 'erreur');
                }

                //Recuperer le nom du fichier de l'image
                $image=basename($chemin_image);

            }

                //Creer un CV avec les données validées et le chemin de l'image
                $data=$request->all();
                $data['cv'] = $image;
                $data['user_id']=$candidat;
                $data['etat']='en_evaluation';
                // $data['user_id'] = $candidat;

                Candidature::create($data); // Enregistrer le produit dans la base de données

                return redirect()->route('candidature.afficher');
            }   
       

            public function afficher_candidature(){
                $candidat=auth()->id();
   
                $candidatures = Candidature::where('user_id', $candidat)->get();
               

                return view('candidates.candidatures.affiche_candidature', compact('candidatures'));
                
                
            }


            public function detail_candidature(){

                return view('detail_affiche_candidature');
            }



}
