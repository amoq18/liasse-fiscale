@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">FICHE ENTREPRISE</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('entreprise.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Informations générales</h4>
                            @include('snippets.input', [
                                'label' => 'Cigle',
                                'name' => 'cigle_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Denomination',
                                'name' => 'denomination_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Forme juridique',
                                'name' => 'forme_juridique_entreprise',
                            ])
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Boîte postale',
                                        'name' => 'boite_postale_entreprise',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Ville',
                                        'name' => 'ville_entreprise',
                                    ])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Numéro du répertoire',
                                        'name' => 'numero_repertoire_entreprise',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Code contribuable',
                                        'name' => 'code_contribuable_entreprise',
                                    ])
                                </div>
                            </div>
                            @include('snippets.input', [
                                'label' => 'Nom du professionnel salarié',
                                'name' => 'nom_professionnel_salarier_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Email',
                                'name' => 'email_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Activité principale',
                                'name' => 'activite_principale_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Centre des Impôts',
                                'name' => 'centre_impots_entreprise',
                            ])
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'IFU',
                                        'name' => 'ifu_entreprise',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Registre de Commerce',
                                        'name' => 'registre_commerce_entreprise',
                                    ])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'N° CNSS',
                                        'name' => 'numero_cnss_entreprise',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Téléphone',
                                        'name' => 'telephone_entreprise',
                                    ])
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <label>State:</label>
                                <select class="select">
                                    <option>Select State</option>
                                    <option value="1">California</option>
                                    <option value="2">Texas</option>
                                    <option value="3">Florida</option>
                                </select>
                            </div> --}}
                        </div>
                        <div class="col-md-6">
                            <h4>Adresse Géographique</h4>
                            @include('snippets.input', [
                                'label' => 'N° Rue',
                                'name' => 'numero_rue_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Quartier',
                                'name' => 'quartier_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'N° Lot',
                                'name' => 'numero_lot_entreprise',
                            ])
                            <h4>Informartions sur le Gérant</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_gerant_entreprise',
                            ])
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Adresse',
                                        'name' => 'adresse_gerant_entreprise',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Fonction',
                                        'name' => 'qualification_gerant_entreprise',
                                    ])
                                </div>
                            </div>
                            <h4>Informations sur l'Expert</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_expert_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Adresse',
                                'name' => 'adresse_expert_entreprise',
                            ])
                            <h4>Informations sur le Signataire</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_signataire_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Prénoms',
                                'name' => 'prenom_signataire_entreprise',
                            ])
                            @include('snippets.input', [
                                'label' => 'Fonction',
                                'name' => 'qualite_signataire_entreprise',
                            ])
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('entreprise.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-floppy-o"></i> Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
