<?php

namespace App\Http\Controllers;

use App\Model\Banque;
use App\Model\Entreprise;
use App\Model\NumeroCompte;
use Brian2694\Toastr\Facades\Toastr;
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
        // $entreprises = Entreprise::all();

        // return view('Banque.index', compact('entreprises'));

        $banques = Banque::all();

        return view('Structure.Banque.index', compact('banques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $entreprises = Entreprise::all();

        // $banques = Banque::all();

        // if(empty($entreprises['0']))
        // {
        //     Toastr::warning("Vous devez créer premièrement l'Entreprise", "Entreprise");

        //     return redirect()->route('entreprise.create')->withRedirect('banque');
        // }
        // else if(empty($banques['0']))
        // {
        //     Toastr::warning("Vous devez créer la Banque", "Banque");

        //     return redirect()->route('structure.banque.create')->withRedirect('compte_bancaire');
        // }
        // else
        // {
        //     return view('Banque.createCompte', compact('entreprises', 'banques'));
        // }

        return view('Structure.Banque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $numero_compte = new NumeroCompte();

        // $numero_compte->banque_id = request('banque_id');
        // $numero_compte->entreprise_id = request('entreprise_id');
        // $numero_compte->numero_compte = request('numero_compte_banque');

        // $numero_compte->save();

        // Toastr::success("Numéro de compte créée avec succès ", "Entreprise");

        // return back();

        $banque = new Banque();

        $banque->cigle = request('cigle_banque');
        $banque->denomination = request('denomination_banque');
        $banque->code = request('code_banque');
        $banque->save();

        Toastr::success('Banque créée avec succès', 'Banque');

        if (request('redirect') == 'compte_bancaire') {
            Toastr::success('Vous pouvez maintenant créér le Compte Bancaire', 'Compte bancaire');

            return 'doit retourner sur creer compte bancaire';
        }
        else
        {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idBanque
     * @return \Illuminate\Http\Response
     */
    public function show($idBanque)
    {
        // params: $idEntreprise, $idCompte

        // $entreprise = Entreprise::findOrFail($idEntreprise);

        // $compte = $entreprise->numero_comptes->where('id', $idCompte)->first();

        // return view('Banque.show', compact('entreprise', 'compte'));

        $banque = Banque::findOrFail($idBanque);

        return view('Structure.Banque.show', compact('banque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idBanque
     * @return \Illuminate\Http\Response
     */
    public function edit($idEntreprise, $idCompte)
    {
        $entreprise = Entreprise::findOrFail($idEntreprise);

        $compte = $entreprise->numero_comptes->where('id', $idCompte)->first();

        return view('Banque.edit', compact('entreprise', 'compte'));
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
