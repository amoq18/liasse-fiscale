<?php

namespace App\Http\Controllers;

use App\Model\Banque;
use App\Model\CompteBancaire;
use App\Model\Entreprise;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CompteBancaireController extends Controller
{
    public function create()
    {
        $entreprises = Entreprise::all();

        $banques = Banque::all();

        if(empty($entreprises['0']))
        {
            Toastr::warning("Vous devez créer premièrement l'Entreprise", "Entreprise");

            return redirect()->route('entreprise.create')->withRedirect('banque');
        }
        else if(empty($banques['0']))
        {
            Toastr::warning("Vous devez créer la Banque", "Banque");

            return redirect()->route('structure.banque.create')->withRedirect('compte_bancaire');
        }
        else
        {
            return view('CompteBancaire.create', compact('entreprises', 'banques'));
        }
    }

    public function store()
    {
        $compte_bancaire = new CompteBancaire();

        $compte_bancaire->banque_id = request('banque_id');
        $compte_bancaire->entreprise_id = request('entreprise_id');
        $compte_bancaire->numero = request('numero_compte_bancaire');
        $compte_bancaire->intitule = request('intitule_compte_bancaire');

        $compte_bancaire->save();

        Toastr::success("Numéro de compte créée avec succès ", "Numéro de Compte");

        return back();
    }
}
