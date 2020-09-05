@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Liste du Staff Dirigeant de l'Entreprise</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('staff.ca.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <h4 class="card-title">Choix de l'Entreprise</h4> --}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Choix de l'Entreprise</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Nom',
                                        'name' => 'nom_conseil_admin',
                                    ])
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Nom',
                                        'name' => 'nom_conseil_admin',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Prenom',
                                        'name' => 'prenom_conseil_admin',
                                    ])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Qualite',
                                        'name' => 'qualite_conseil_admin',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Nature',
                                        'name' => 'nature_apport_conseil_admin',
                                    ])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Pourcentage',
                                        'name' => 'pourcentage_apport_conseil_admin',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Valeur',
                                        'name' => 'valeur_apport_conseil_admin',
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
                                <a href="{{ route('staff.ca.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o"></i> Enregistrer
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
