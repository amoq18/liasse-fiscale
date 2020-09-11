<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControleCoherenceController extends Controller
{
    public function index()
    {
        return view('Traitement.controle-coherence');
    }
}
