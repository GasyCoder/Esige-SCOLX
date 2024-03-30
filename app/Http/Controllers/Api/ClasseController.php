<?php

namespace App\Http\Controllers\Api;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();

        return response()->json($classes);
    }
}
