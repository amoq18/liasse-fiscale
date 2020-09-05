<?php

namespace App\Http\Controllers;

use App\Model\Banque;
use App\Model\Entreprise;
use Illuminate\Http\Request;

class BanqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();

        return view('Banque.index', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();

        return view('Banque.create', compact('entreprises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // @dd(request()->all());
        $banque = new Banque();
        $banque->nom = request('nom_banque');
        $banque->numero_compte = request('numero_compte_banque');

        $banque->save();

        Banque::findOrFail($banque->id)->entreprises()->sync(request('entreprise_id'));

        return redirect()->back()->with(['success_banque_create' => 'Banque créée avec succès']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idBanque
     * @return \Illuminate\Http\Response
     */
    public function show($idBanque)
    {
        $banque = Banque::findOrFail($idBanque);

        return view('Banque.show', compact('banque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idBanque
     * @return \Illuminate\Http\Response
     */
    public function edit($idBanque)
    {
        $banque = Banque::findOrFail($idBanque);

        return view('Banque.edit', compact('banque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idBanque
     * @return \Illuminate\Http\Response
     */
    public function update($idBanque)
    {
        $banque = Banque::findOrFail($idBanque);
        $banque->nom = request('nom_banque');
        $banque->numero_compte = request('numero_compte_banque');

        $banque->save();

        return redirect()->route('banque.index')->with(['success_banque_modify' => 'Banque modifiée avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idBanque
     * @return \Illuminate\Http\Response
     */
    public function delete($idBanque)
    {
        Banque::findOrFail($idBanque)->delete();

        return redirect()->route('banque.index')->with(['success_banque_delete' => 'Banque supprimée avec succès']);
    }
}
