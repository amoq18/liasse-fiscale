<?php

namespace App\Http\Controllers;

use App\Model\Banque;
use App\Model\Entreprise;
use App\PlanComptable;
use Brian2694\Toastr\Facades\Toastr;
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
            $banque->denomination = request('denomination_banque');
            $banque->code = request('code_banque');
            $banque->save();

            Toastr::success('Banque créée avec succès', 'success');

            return back();
        }

        return view('Structure.create_banque');
    }


    public function index_plans_comptables()
    {
        $plans_comptables = PlanComptable::all();
// dd($plans_comptables);
        return view('Structure.liste_plans_comptables', compact('plans_comptables'));
    }

    public function index_centre_impots()
    {
        $entreprises = Entreprise::all();
        return view('Structure.liste_impots', compact('entreprises'));
    }

}
