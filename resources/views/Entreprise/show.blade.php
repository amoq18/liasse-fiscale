@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informations générale sur l'Entreprise</h4>
            </div>
            <div class="card-body">
                {{-- <form action="{{ route('entreprise.create') }}" method="POST"> --}}
                    {{-- @csrf --}}
                    {{-- @dd($entreprise->cigle) --}}
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Informations sur l'Entreprise</h4>
                            @include('snippets.input', [
                                'label' => 'Cigle',
                                'name' => 'cigle_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->cigle,
                            ])
                            @include('snippets.input', [
                                'label' => 'Denomination',
                                'name' => 'denomination_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->denomination,
                            ])
                            @include('snippets.input', [
                                'label' => 'Forme juridique',
                                'name' => 'forme_juridique_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->forme_juridique,
                            ])
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Boîte postale',
                                        'name' => 'boite_postale_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->boite_postale,
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Ville',
                                        'name' => 'ville_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->ville,
                                    ])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Numéro du répertoire',
                                        'name' => 'numero_repertoire_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->numero_repertoire,
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Code contribuable',
                                        'name' => 'code_contribuable_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->code_contribuable,
                                    ])
                                </div>
                            </div>
                            @include('snippets.input', [
                                'label' => 'Nom du professionnel salarié',
                                'name' => 'nom_professionnel_salarier_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->nom_professionnel_salarier,
                            ])
                            @include('snippets.input', [
                                'label' => 'Email',
                                'name' => 'email_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->mail,
                            ])
                            @include('snippets.input', [
                                'label' => 'Activité principale',
                                'name' => 'activite_principale_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->activite_principale,
                            ])
                            @include('snippets.input', [
                                'label' => 'Centre des Impôts',
                                'name' => 'centre_impots_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->centre_impots,
                            ])
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'IFU',
                                        'name' => 'ifu_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->ifu,
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Registre de Commerce',
                                        'name' => 'registre_commerce_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->registre_commerce,
                                    ])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'N° CNSS',
                                        'name' => 'numero_cnss_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->numero_cnss,
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Téléphone',
                                        'name' => 'telephone_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->telephone,
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Adresse Géographique</h4>
                            @include('snippets.input', [
                                'label' => 'N° Rue',
                                'name' => 'numero_rue_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->numero_rue,
                            ])
                            @include('snippets.input', [
                                'label' => 'Quartier',
                                'name' => 'quartier_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->quartier,
                            ])
                            @include('snippets.input', [
                                'label' => 'N° Lot',
                                'name' => 'numero_lot_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->numero_lot,
                            ])
                            <h4>Informartions sur le Gérant</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_gerant_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->nom_gerant,
                            ])
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Adresse',
                                        'name' => 'adresse_gerant_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->adresse_gerant,
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Qualification',
                                        'name' => 'qualification_gerant_entreprise',
                                        'disabled' => 'yes',
                                        'value' => $entreprise->qualification_gerant,
                                    ])
                                </div>
                            </div>
                            <h4>Informations sur l'Expert</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_expert_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->nom_expert,
                            ])
                            @include('snippets.input', [
                                'label' => 'Adresse',
                                'name' => 'adresse_expert_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->adresse_expert,
                            ])
                            <h4>Informations sur le Signataire</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_signataire_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->nom_signataire,
                            ])
                            @include('snippets.input', [
                                'label' => 'Prénoms',
                                'name' => 'prenom_signataire_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->prenom_signataire,
                            ])
                            @include('snippets.input', [
                                'label' => 'Qualité',
                                'name' => 'qualite_signataire_entreprise',
                                'disabled' => 'yes',
                                'value' => $entreprise->qualite_signataire,
                            ])
                        </div>
                    </div>
                    <div class="text-right">
                        <a href=""></a>
                        <input type="submit" class="btn btn-primary" value="Enregistrer">
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
@endsection
