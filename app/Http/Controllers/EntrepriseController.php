<?php

namespace App\Http\Controllers;

use App\Model\Entreprise;
use App\Model\Pays;
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
        request()->validate([
            'cigle_entreprise' => 'unique:entreprises,cigle',
            'boite_postale_entreprise' => 'unique:entreprises,boite_postale',
            'numero_repertoire_entreprise' => 'unique:entreprises,numero_repertoire',
            'code_contribuable_entreprise' => 'unique:entreprises,code_contribuable',
            'email_entreprise' => 'unique:entreprises,email',
            'ifu_entreprise' => 'unique:entreprises,ifu',
            'registre_commerce_entreprise' => 'unique:entreprises,registre_commerce',
            'numero_cnss_entreprise' => 'unique:entreprises,numero_cnss',
            'telephone_entreprise' => 'unique:entreprises,telephone',
        ]);


        $pays = Pays::create([
            'nom' => request('pays_entreprise'),
            'code' => '+'.request('code_pays_entreprise'),
        ]);

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
        $entreprise->pay_id = $pays->id;

        $entreprise->save();

        Toastr::success('Entreprise créée avec succès', 'Entreprise');

        if (request('redirect') == 'staff')
        {
            Toastr::success('Vous pouvez maintenant créér le Staff', 'Staff');

            return redirect()->route('staff.create');
        }
        elseif (request('redirect') == 'banque')
        {
            Toastr::success('Vous pouvez maintenant créér la Banque', 'Banque');

            return redirect()->route('structure.banque.create');
        }

        return back();
    }

    public function index()
    {
        $entreprises = Entreprise::all();

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

        Toastr::success('Entreprise modifiée avec succès', 'Entreprise');

        return redirect()->route('entreprise.index');
    }

    public function show($idEntreprise)
    {
        $entreprise = Entreprise::findOrFail($idEntreprise);

        return view('Entreprise.show', compact('entreprise'));
    }

    public function delete($idEntreprise)
    {
        Entreprise::findOrFail($idEntreprise)->delete();

        Toastr::success('Entreprise supprimée avec succès', 'Entreprise');

        return redirect()->route('entreprise.index');
    }
}
