<?php

namespace App\Http\Controllers;

use App\Model\Banque;
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
        $banques = Banque::all();

        return view('Banque.index', compact('banques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Banque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banque = new Banque();
        $banque->nom = request('nom_banque');
        $banque->numero_compte = request('numero_compte_banque');

        $banque->save();

        return redirect()->route('banque.index')->with(['success_banque_create' => 'Banque créée avec succès']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idbanque
     * @return \Illuminate\Http\Response
     */
    public function show($idbanque)
    {
        $banque = Banque::findOrFail($idbanque);

        return view('banque.show', compact('banque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idbanque
     * @return \Illuminate\Http\Response
     */
    public function edit($idbanque)
    {
        $banque = Banque::findOrFail($idbanque);

        return view('banque.edit', compact('banque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idbanque
     * @return \Illuminate\Http\Response
     */
    public function update($idbanque)
    {
        $banque = Banque::findOrFail($idbanque);
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
