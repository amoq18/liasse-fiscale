<?php

namespace App\Http\Controllers;

use App\Model\Exercice;
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
        $exercices = Exercice::all();

        return view('Exercice.index', compact('exercices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Exercice.create');
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

        $exercice->save();

        return redirect()->route('exercice.index')->with(['success_exercice_create' => 'Exercice créée avec succès']);
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

        return redirect()->route('exercice.index')->with(['success_exercice_modify' => 'Exercice modifié avec succès']);
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

        return redirect()->route('exercice.index')->with(['success_exercice_delete' => 'Exercice supprimé avec succès']);
    }
}
