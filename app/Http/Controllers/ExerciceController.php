<?php

namespace App\Http\Controllers;

use App\Model\Entreprise;
use App\Model\Exercice;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();

        return view('Exercice.index', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();

        if(empty($entreprises['0'])) {
            Toastr::error("Vous devez créer premièrement l'Entreprise", "Entreprise");
            return redirect()->route('entreprise.create');
        } else {
            return view('Exercice.create', compact('entreprises'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exercice = new Exercice();

        $exercice->date_debut = request('date_debut_exercice');
        $exercice->date_fin = request('date_fin_exercice');
        $exercice->exercice_precedent = request('exercice_precedent_exercice');
        $exercice->impot_minimum = request('impot_minimum_exercice');
        $exercice->taux_proportionnel = request('taux_proportionnel_exercice');
        $exercice->taux_impot = request('taux_impot_exercice');
        $exercice->entreprise_id = request('entreprise_id');
        $exercice->liasse_comptable = request('type_liasse_comptable');
        $exercice->liasse_fiscale = request('type_liasse_fiscale');

        $exercice->save();

        Toastr::success('Exercice créé avec succès','Exercice');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idExercice
     * @return \Illuminate\Http\Response
     */
    public function show($idExercice)
    {
        $exercice = Exercice::findOrFail($idExercice);

        return view('Exercice.show', compact('exercice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idExercice
     * @return \Illuminate\Http\Response
     */
    public function edit($idExercice)
    {
        $exercice = Exercice::findOrFail($idExercice);

        return view('Exercice.edit', compact('exercice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idExercice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idExercice)
    {
        $exercice = Exercice::findOrFail($idExercice);

        $exercice->date_debut = request('date_debut_exercice');
        $exercice->date_fin = request('date_fin_exercice');
        $exercice->exercice_precedent = request('exercice_precedent_exercice');
        $exercice->impot_minimum = request('impot_minimum_exercice');
        $exercice->taux_proportionnel = request('taux_proportionnel_exercice');
        $exercice->taux_impot = request('taux_impot_exercice');

        $exercice->save();

        Toastr::success('Exercice modifié avec succès', 'Exercice');
        
        return redirect()->route('exercice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idExercice
     * @return \Illuminate\Http\Response
     */
    public function delete($idExercice)
    {
        $exercice = Exercice::findOrFail($idExercice)->delete();

        Toastr::success('Exercice supprimé avec succès', 'Exercice');
        return redirect()->route('exercice.index');
    }
}
