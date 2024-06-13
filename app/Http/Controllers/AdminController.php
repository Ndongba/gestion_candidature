<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //  ListeCandidates

    

    public function listeCandadats()
    {
        // Liste toutes les candidatures
        $candidatures = Candidature::all();
        return view('admins.candidats.index', compact('candidatures'));
    }
}
