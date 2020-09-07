@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Créer une Entreprise</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('entreprise.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Informations sur l'Entreprise</h4>
                            <div class="form-group">
                                <label> Cigle:</label>
                                <input required type="text" name="cigle_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Denomination:</label>
                                <input required type="text" name="denomination_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Forme juridique:</label>
                                <input required type="text" name="forme_juridique_entreprise" class="form-control"/>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Boîte postale:</label>
                                        <input required type="text" name="boite_postale_entreprise" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Ville:</label>
                                        <input required type="text" name="ville_entreprise" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Numéro du répertoire:</label>
                                        <input type="number" min="0" name="numero_repertoire_entreprise" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Code contribuable:</label>
                                        <input type="number" min="0" name="code_contribuable_entreprise" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Nom du professionnel salarié:</label>
                                <input type="text" name="nom_professionnel_salarier_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Email:</label>
                                <input type="text" name="email_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Activité principale:</label>
                                <input required type="text" name="activite_principale_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Centre des Impôts:</label>
                                <input required type="text" name="centre_impots_entreprise" class="form-control"/>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> IFU:</label>
                                        <input required type="number" min="0" name="ifu_entreprise" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Registre de Commerce:</label>
                                        <input required type="text" name="registre_commerce_entreprise" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> N° CNSS:</label>
                                        <input type="number" min="0" name="numero_cnss_entreprise" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Téléphone:</label>
                                        <input required type="text" name="telephone_entreprise" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Adresse Géographique</h4>
                            <div class="form-group">
                                <label> N° Rue:</label>
                                <input required type="number" min="0" name="numero_rue_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Quartier:</label>
                                <input required type="text" name="quartier_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> N° Lot:</label>
                                <input required type="number" min="0" name="numero_lot_entreprise" class="form-control"/>
                            </div>
                            <h4>Informartions sur le Gérant</h4>
                            <div class="form-group">
                                <label> Nom:</label>
                                <input required type="text" name="nom_gerant_entreprise" class="form-control"/>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Adresse:</label>
                                        <input required type="text" name="adresse_gerant_entreprise" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Qualification:</label>
                                        <input required type="text" name="qualification_gerant_entreprise" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <h4>Informations sur l'Expert</h4>
                            <div class="form-group">
                                <label> Nom:</label>
                                <input required type="text" name="nom_expert_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Adresse:</label>
                                <input required type="text" name="adresse_expert_entreprise" class="form-control"/>
                            </div>
                            <h4>Informations sur le Signataire</h4>
                            <div class="form-group">
                                <label> Nom:</label>
                                <input required type="text" name="nom_signataire_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Prénoms:</label>
                                <input required type="text" name="prenom_signataire_entreprise" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label> Qualité:</label>
                                <input required type="text" name="qualite_signataire_entreprise" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('entreprise.index') }}"></a>
                        <input type="submit" class="btn btn-primary" value="Enregistrer" />
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
