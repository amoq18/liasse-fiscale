<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControleConformiteController extends Controller
{
    public function index()
    {
        return view('Traitement.controle-conformite');
    }
}
