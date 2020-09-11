<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControleEquilibreController extends Controller
{
    public function index()
    {
        return view('Traitement.controle-equilibre');
    }
}
