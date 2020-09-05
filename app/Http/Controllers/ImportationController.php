<?php

namespace App\Http\Controllers;

use App\Model\Entreprise;
use App\Model\Exercice;
use Illuminate\Http\Request;

class ImportationController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();

        $exercices = Exercice::all();

        return view('Importation.index', compact('entreprises', 'exercices'));
    }
}
