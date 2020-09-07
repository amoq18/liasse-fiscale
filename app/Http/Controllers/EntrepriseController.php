<?php

namespace App\Http\Controllers;

use App\Model\Entreprise;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function create()
    {
        return view('Entreprise.create');
    }

    public function store()
    {
        $entreprise = new Entreprise;

        $entreprise->cigle = request('cigle_entreprise');
        $entreprise->denomination = request('denomination_entreprise');
        $entreprise->forme_juridique = request('forme_juridique_entreprise');
        $entreprise->boite_postale = request('boite_postale_entreprise');
        $entreprise->ville = request('ville_entreprise');
        $entreprise->numero_repertoire = request('numero_repertoire_entreprise');
        $entreprise->code_contribuable = request('code_contribuable_entreprise');
        $entreprise->email = request('email_entreprise');
        $entreprise->nom_gerant = request('nom_gerant_entreprise');
        $entreprise->adresse_gerant = request('adresse_gerant_entreprise');
        $entreprise->qualification_gerant = request('qualification_gerant_entreprise');
        $entreprise->nom_professionnel_salarier = request('nom_professionnel_salarier_entreprise');
        $entreprise->nom_expert = request('nom_expert_entreprise');
        $entreprise->adresse_expert = request('adresse_expert_entreprise');
        $entreprise->nom_signataire = request('nom_signataire_entreprise');
        $entreprise->prenom_signataire = request('prenom_signataire_entreprise');
        $entreprise->qualite_signataire = request('qualite_signataire_entreprise');
        $entreprise->numero_rue = request('numero_rue_entreprise');
        $entreprise->quartier = request('quartier_entreprise');
        $entreprise->numero_lot = request('numero_lot_entreprise');
        $entreprise->activite_principale = request('activite_principale_entreprise');
        $entreprise->ifu = request('ifu_entreprise');
        $entreprise->centre_impots = request('centre_impots_entreprise');
        $entreprise->registre_commerce = request('registre_commerce_entreprise');
        $entreprise->numero_cnss = request('numero_cnss_entreprise');
        $entreprise->telephone = request('telephone_entreprise');

        $entreprise->save();

        Toastr::success('Entreprise créée avec succès', 'Entreprise');
        return back();
    }

    public function index()
    {
        $entreprises = Entreprise::all();

        if(request('query') == 'ajax') {
            return response()->json('200');
        }

        return view('Entreprise.index', compact('entreprises'));
    }

    public function edit($idEntreprise)
    {
        $entreprise = Entreprise::findOrFail($idEntreprise);

        return view('Entreprise.edit', compact('entreprise'));
    }

    public function update($idEntreprise)
    {
        $entreprise = Entreprise::findOrFail($idEntreprise);

        $entreprise->cigle = request('cigle_entreprise');
        $entreprise->denomination = request('denomination_entreprise');
        $entreprise->forme_juridique = request('forme_juridique_entreprise');
        $entreprise->boite_postale = request('boite_postale_entreprise');
        $entreprise->ville = request('ville_entreprise');
        $entreprise->numero_repertoire = request('numero_repertoire_entreprise');
        $entreprise->code_contribuable = request('code_contribuable_entreprise');
        $entreprise->email = request('email_entreprise');
        $entreprise->nom_gerant = request('nom_gerant_entreprise');
        $entreprise->adresse_gerant = request('adresse_gerant_entreprise');
        $entreprise->qualification_gerant = request('qualification_gerant_entreprise');
        $entreprise->nom_professionnel_salarier = request('nom_professionnel_salarier_entreprise');
        $entreprise->nom_expert = request('nom_expert_entreprise');
        $entreprise->adresse_expert = request('adresse_expert_entreprise');
        $entreprise->nom_signataire = request('nom_signataire_entreprise');
        $entreprise->prenom_signataire = request('prenom_signataire_entreprise');
        $entreprise->qualite_signataire = request('qualite_signataire_entreprise');
        $entreprise->numero_rue = request('numero_rue_entreprise');
        $entreprise->quartier = request('quartier_entreprise');
        $entreprise->numero_lot = request('numero_lot_entreprise');
        $entreprise->activite_principale = request('activite_principale_entreprise');
        $entreprise->ifu = request('ifu_entreprise');
        $entreprise->centre_impots = request('centre_impots_entreprise');
        $entreprise->registre_commerce = request('registre_commerce_entreprise');
        $entreprise->numero_cnss = request('numero_cnss_entreprise');
        $entreprise->telephone = request('telephone_entreprise');

        $entreprise->save();

        return redirect()->route('entreprise.index')->with(['success_entreprise_modify' => 'Entreprise modifiée avec succès']);
    }

    public function show($idEntreprise)
    {
        $entreprise = Entreprise::findOrFail($idEntreprise);

        return view('Entreprise.show', compact('entreprise'));
    }

    public function delete($idEntreprise)
    {
        Entreprise::findOrFail($idEntreprise)->delete();

        return redirect()->route('entreprise.index')->with(['success_entreprise_delete' => 'Entreprise supprimée avec succès']);
    }
}
