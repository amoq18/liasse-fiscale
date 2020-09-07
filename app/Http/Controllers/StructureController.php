<?php

namespace App\Http\Controllers;

use App\Model\Banque;
use App\Model\Entreprise;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index_pays()
    {
        $entreprises = Entreprise::all();
        return view('Structure.liste_pays', compact('entreprises'));
    }

    public function index_banques()
    {
        $banques = Banque::all();
        return view('Structure.liste_banques', compact('banques'));
    }

    public function create_banque()
    {
        if(request()->isMethod("POST")) {
            $banque = new Banque();

            $banque->nom = request('nom_banque');
            $banque->save();

            return back()->with(['success_banque_create' => 'Banque créée avec succès']);
        }

        return view('Structure.creer_banque');
    }


    public function index_comptables()
    {
        return view('Structure.liste_comptables');
    }

    public function index_centre_impots()
    {
        $entreprises = Entreprise::all();
        return view('Structure.liste_impots', compact('entreprises'));
    }

}
