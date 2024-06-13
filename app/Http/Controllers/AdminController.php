<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //  ListeCandidates

    

 
    public function listeCandadats($id)
    {
        $formation = Formation::find($id);
        $candidatures = $formation->candidatures()->with('user')->get();
        return view('admins.candidats.index', compact('formation', 'candidatures'));
    }
  
    
}
