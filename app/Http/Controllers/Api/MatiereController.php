<?php

namespace App\Http\Controllers\Api;

use App\Models\Matiere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatiereController extends Controller
{
    public function index()
    {
        $matieres = Matiere::where('is_active', true)
                             ->with('classe', 'teacher', 'parcours')
                             ->get();

        return response()->json($matieres);
    }
}
