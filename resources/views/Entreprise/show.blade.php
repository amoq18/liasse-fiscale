@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informations générale sur l'Entreprise</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Informations sur l'Entreprise</h4>
                        <div class="form-group">
                            <label> Cigle:</label>
                            <input type="text" disabled name="cigle_entreprise" class="form-control" value="{{ $entreprise->cigle }}" aut />
                        </div>
                        <div class="form-group">
                            <label> Denomination:</label>
                            <input type="text" disabled name="denomination_entreprise" class="form-control" value="{{ $entreprise->denomination }}" aliqu />
                        </div>
                        <div class="form-group">
                            <label> Forme juridique:</label>
                            <input type="text" disabled name="forme_juridique_entreprise" class="form-control" value="{{ $entreprise->forme_juridique }}" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Boîte postale:</label>
                                    <input type="text" disabled name="boite_postale_entreprise" class="form-control" value="{{ $entreprise->boite_postale }}" deser />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Ville:</label>
                                    <input type="text" disabled name="ville_entreprise" class="form-control" value="{{ $entreprise->ville }}" quod es />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Numéro du répertoire:</label>
                                    <input type="text" disabled name="numero_repertoire_entreprise" class="form-control" value="{{ $entreprise->numero_repertoire }}" aut temp />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Code contribuable:</label>
                                    <input type="text" disabled name="code_contribuable_entreprise" class="form-control" value="{{ $entreprise->code_contribuable }}" exerci />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Nom du professionnel salarié:</label>
                            <input type="text" disabled name="nom_professionnel_salarier_entreprise" class="form-control" value="{{ $entreprise->nom_professionnel_salarier }}" r />
                        </div>
                        <div class="form-group">
                            <label> Email:</label>
                            <input type="text" disabled name="email_entreprise" class="form-control" value="{{ $entreprise->email }}@mailinator.com" />
                        </div>
                        <div class="form-group">
                            <label> Activité principale:</label>
                            <input type="text" disabled name="activite_principale_entreprise" class="form-control" value="{{ $entreprise->activite_principale }}" no />
                        </div>
                        <div class="form-group">
                            <label> Centre des Impôts:</label>
                            <input type="text" disabled name="centre_impots_entreprise" class="form-control" value="{{ $entreprise->centre_impots }}" blandi />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> IFU:</label>
                                    <input type="text" disabled name="ifu_entreprise" class="form-control" value="{{ $entreprise->ifu }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Registre de Commerce:</label>
                                    <input type="text" disabled name="registre_commerce_entreprise" class="form-control" value="{{ $entreprise->registre_commerce }}" est />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> N° CNSS:</label>
                                    <input type="text" disabled name="numero_cnss_entreprise" class="form-control" value="{{ $entreprise->numero_cnss }}" duc />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Téléphone:</label>
                                    <input type="text" disabled name="telephone_entreprise" class="form-control" value="+{{ $entreprise->telephone }}" (141) 908-4579 />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Adresse Géographique</h4>
                        <div class="form-group">
                            <label> N° Rue:</label>
                            <input type="text" disabled name="numero_rue_entreprise" class="form-control" value="{{ $entreprise->numero_rue }}" />
                        </div>
                        <div class="form-group">
                            <label> Quartier:</label>
                            <input type="text" disabled name="quartier_entreprise" class="form-control" value="{{ $entreprise->quartier }}" tempo />
                        </div>
                        <div class="form-group">
                            <label> N° Lot:</label>
                            <input type="text" disabled name="numero_lot_entreprise" class="form-control" value="{{ $entreprise->numero_lot }}" vol />
                        </div>
                        <h4>Informartions sur le Gérant</h4>
                        <div class="form-group">
                            <label> Nom:</label>
                            <input type="text" disabled name="nom_gerant_entreprise" class="form-control" value="{{ $entreprise->nom_gerant }}" s />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Adresse:</label>
                                    <input type="text" disabled name="adresse_gerant_entreprise" class="form-control" value="{{ $entreprise->adresse_gerant }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Qualification:</label>
                                    <input type="text" disabled name="qualification_gerant_entreprise" class="form-control" value="{{ $entreprise->qualification_gerant }}" ni />
                                </div>
                            </div>
                        </div>
                        <h4>Informations sur l'Expert</h4>
                        <div class="form-group">
                            <label> Nom:</label>
                            <input type="text" disabled name="nom_expert_entreprise" class="form-control" value="{{ $entreprise->nom_expert }}" susc />
                        </div>
                        <div class="form-group">
                            <label> Adresse:</label>
                            <input type="text" disabled name="adresse_expert_entreprise" class="form-control" value="{{ $entreprise->adresse_expert }}" est />
                        </div>
                        <h4>Informations sur le Signataire</h4>
                        <div class="form-group">
                            <label> Nom:</label>
                            <input type="text" disabled name="nom_signataire_entreprise" class="form-control" value="{{ $entreprise->nom_signataire }}" />
                        </div>
                        <div class="form-group">
                            <label> Prénoms:</label>
                            <input type="text" disabled name="prenom_signataire_entreprise" class="form-control" value="{{ $entreprise->prenom_signataire }}" m />
                        </div>
                        <div class="form-group">
                            <label> Qualité:</label>
                            <input type="text" disabled name="qualite_signataire_entreprise" class="form-control" value="{{ $entreprise->qualite_signataire }}" maiore />
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
