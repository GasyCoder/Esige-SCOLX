<?php

namespace App\Http\Controllers\Api;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::where('isActive', true)
                             ->where('typeFormation', true)
                             ->with('classe', 'parcour')
                             ->get();

        return response()->json($etudiants);
    }
}
