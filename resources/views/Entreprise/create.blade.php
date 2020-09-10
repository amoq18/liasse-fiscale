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
                        @if (Session::has('redirect'))
                            <input name="redirect" type="hidden" value="{{ Session::get('redirect') }}">
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Informations sur l'Entreprise</h4>
                                <div class="form-group">
                                    <label> Cigle:</label>
                                    <input required type="text" name="cigle_entreprise" value="{{ old('cigle_entreprise') }}"
                                        class="form-control upper @error('cigle_entreprise') is-invalid @enderror" />
                                    @error('cigle_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('cigle_entreprise') }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label> Dénomination:</label>
                                    <input required type="text" name="denomination_entreprise" value="{{ old('denomination_entreprise') }}"
                                        class="form-control  @error('denomination_entreprise') is-invalid @enderror" />
                                    @error('denomination_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('denomination_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label> Forme juridique:</label>
                                    <input required type="text" name="forme_juridique_entreprise" value="{{ old('forme_juridique_entreprise') }}"
                                        class="form-control  @error('forme_juridique_entreprise') is-invalid @enderror" />
                                    @error('forme_juridique_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('forme_juridique_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Boîte postale:</label>
                                            <input required type="text" name="boite_postale_entreprise" value="{{ old('boite_postale_entreprise') }}"
                                                class="form-control @error('boite_postale_entreprise') is-invalid @enderror" />
                                            @error('boite_postale_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('boite_postale_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Code contribuable:</label>
                                            <input type="number" min="0" name="code_contribuable_entreprise" value="{{ old('code_contribuable_entreprise') }}"
                                                class="form-control @error('code_contribuable_entreprise') is-invalid @enderror" />
                                            @error('code_contribuable_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('code_contribuable_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Numéro du répertoire:</label>
                                    <input type="number" min="0" name="numero_repertoire_entreprise" value="{{ old('numero_repertoire_entreprise') }}"
                                        class="form-control @error('numero_repertoire_entreprise') is-invalid @enderror" />
                                    @error('numero_repertoire_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('numero_repertoire_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label> Nom du professionnel salarié:</label>
                                    <input type="text" name="nom_professionnel_salarier_entreprise" value="{{ old('nom_professionnel_salarier_entreprise') }}"
                                        class="form-control @error('nom_professionnel_salarier_entreprise') is-invalid @enderror" />
                                    @error('nom_professionnel_salarier_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('nom_professionnel_salarier_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label> Email:</label>
                                    <input type="email" name="email_entreprise" value="{{ old('email_entreprise') }}"
                                        class="form-control @error('email_entreprise') is-invalid @enderror" />
                                    @error('email_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('email_entreprise') }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label> Activité principale:</label>
                                    <input required type="text" name="activite_principale_entreprise" value="{{ old('activite_principale_entreprise') }}"
                                        class="form-control @error('activite_principale_entreprise') is-invalid @enderror" />
                                    @error('activite_principale_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('activite_principale_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label> Centre des Impôts:</label>
                                    <input required type="text" name="centre_impots_entreprise" value="{{ old('centre_impots_entreprise') }}"
                                        class="form-control @error('centre_impots_entreprise') is-invalid @enderror" />
                                    @error('centre_impots_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('centre_impots_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> IFU:</label>
                                            <input required type="number" min="0" name="ifu_entreprise" value="{{ old('ifu_entreprise') }}"
                                                class="form-control @error('ifu_entreprise') is-invalid @enderror" />
                                            @error('ifu_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('ifu_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Registre de Commerce:</label>
                                            <input required type="text" name="registre_commerce_entreprise" value="{{ old('registre_commerce_entreprise') }}"
                                                class="form-control @error('registre_commerce_entreprise') is-invalid @enderror" />
                                            @error('registre_commerce_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('registre_commerce_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> N° CNSS:</label>
                                            <input type="number" min="0" name="numero_cnss_entreprise" value="{{ old('numero_cnss_entreprise') }}"
                                                class="form-control @error('numero_cnss_entreprise') is-invalid @enderror" />
                                            @error('numero_cnss_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('numero_cnss_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Téléphone:</label>
                                            <input required type="text" name="telephone_entreprise" value="{{ old('telephone_entreprise') }}"
                                                class="form-control @error('telephone_entreprise') is-invalid @enderror" />
                                            @error('telephone_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('telephone_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Adresse Géographique</h4>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label> Pays:</label>
                                            <div class="row">
                                                <div class="col-md-5 pr-0">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text font-weight-bold" style="background: whitesmoke">+</span>
                                                        </div>
                                                        <input required type="number" name="code_pays_entreprise" min="0" class="form-control" >
                                                    </div>
                                                    {{-- <input required type="number" min="0" name="code_pays_entreprise" value="{{ old('code_pays_entreprise') }}"
                                                        class="form-control @error('code_pays_entreprise') is-invalid @enderror" />
                                                    @error('pays_entreprise') <span
                                                        class="invalid-feedback">{{ $errors->first('pays_entreprise') }}</span>
                                                    @enderror --}}
                                                </div>
                                                <div class="col-md-7">
                                                    <input required type="text" name="pays_entreprise" value="{{ old('pays_entreprise') }}"
                                                        class="form-control @error('pays_entreprise') is-invalid @enderror" />
                                                    @error('pays_entreprise') <span
                                                        class="invalid-feedback">{{ $errors->first('pays_entreprise') }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label> Ville:</label>
                                            <input required type="text" name="ville_entreprise" value="{{ old('ville_entreprise') }}"
                                                class="form-control @error('ville_entreprise') is-invalid @enderror" />
                                            @error('ville_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('ville_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Quartier:</label>
                                    <input required type="text" name="quartier_entreprise" value="{{ old('quartier_entreprise') }}"
                                        class="form-control @error('quartier_entreprise') is-invalid @enderror" />
                                    @error('quartier_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('quartier_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> N° Rue:</label>
                                            <input type="text" name="numero_rue_entreprise" value="{{ old('numero_rue_entreprise') }}"
                                                class="form-control @error('numero_rue_entreprise') is-invalid @enderror" />
                                            @error('numero_rue_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('numero_rue_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> N° Lot:</label>
                                            <input type="text" name="numero_lot_entreprise" value="{{ old('numero_lot_entreprise') }}"
                                                class="form-control @error('numero_lot_entreprise') is-invalid @enderror" />
                                            @error('numero_lot_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('numero_lot_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h4>Informartions sur le Gérant</h4>
                                <div class="form-group">
                                    <label> Nom:</label>
                                    <input required type="text" name="nom_gerant_entreprise" value="{{ old('nom_gerant_entreprise') }}"
                                        class="form-control @error('nom_gerant_entreprise') is-invalid @enderror" />
                                    @error('nom_gerant_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('nom_gerant_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Adresse:</label>
                                            <input required type="text" name="adresse_gerant_entreprise" value="{{ old('adresse_gerant_entreprise') }}"
                                                class="form-control @error('adresse_gerant_entreprise') is-invalid @enderror" />
                                            @error('adresse_gerant_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('adresse_gerant_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Qualification:</label>
                                            <input required type="text" name="qualification_gerant_entreprise" value="{{ old('qualification_gerant_entreprise') }}"
                                                class="form-control @error('qualification_gerant_entreprise') is-invalid @enderror" />
                                            @error('qualification_gerant_entreprise') <span
                                                class="invalid-feedback">{{ $errors->first('qualification_gerant_entreprise') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h4>Informations sur l'Expert</h4>
                                <div class="form-group">
                                    <label> Nom:</label>
                                    <input required type="text" name="nom_expert_entreprise" value="{{ old('nom_expert_entreprise') }}"
                                        class="form-control @error('nom_expert_entreprise') is-invalid @enderror" />
                                    @error('nom_expert_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('nom_expert_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label> Adresse:</label>
                                    <input required type="text" name="adresse_expert_entreprise" value="{{ old('adresse_expert_entreprise') }}"
                                        class="form-control @error('adresse_expert_entreprise') is-invalid @enderror" />
                                    @error('adresse_expert_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('adresse_expert_entreprise') }}</span>
                                    @enderror
                                </div>
                                <h4>Informations sur le Signataire</h4>
                                <div class="form-group">
                                    <label> Nom:</label>
                                    <input required type="text" name="nom_signataire_entreprise" value="{{ old('nom_signataire_entreprise') }}"
                                        class="form-control @error('nom_signataire_entreprise') is-invalid @enderror" />
                                    @error('nom_signataire_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('nom_signataire_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label> Prénoms:</label>
                                    <input required type="text" name="prenom_signataire_entreprise" value="{{ old('prenom_signataire_entreprise') }}"
                                        class="form-control @error('prenom_signataire_entreprise') is-invalid @enderror" />
                                    @error('prenom_signataire_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('prenom_signataire_entreprise') }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label> Qualité:</label>
                                    <input required type="text" name="qualite_signataire_entreprise" value="{{ old('qualite_signataire_entreprise') }}"
                                        class="form-control @error('qualite_signataire_entreprise') is-invalid @enderror" />
                                    @error('qualite_signataire_entreprise') <span
                                        class="invalid-feedback">{{ $errors->first('qualite_signataire_entreprise') }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="{{ route('entreprise.index') }}" class="btn btn-danger"><i class="fa fa-close"></i>
                                Fermer</a>
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
