<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
  
    public function ajouter_candidature(){

        return view('candidature');

    }


    public function traitement_candidature(Request $request){

        $request->validate([
            
            'formation_id' => 'required',
            'user_id' => 'required',
            'biographie' => 'required',
            'motivation' => 'required',
            
        ]);

        Candidature::create($request->all());
        return redirect('');

    }
}
