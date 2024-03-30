<?php

namespace App\Http\Controllers\Api;

use App\Models\Classe;
use App\Models\Parcour;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParcourController extends Controller
{
    public function index()
    {
        $parcours = Parcour::all();

        return response()->json($parcours);
    }
}
