@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Créer un nouveau Conseil d'Administration</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('staff.ca.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title">Informations sur le nouveau Conseil d'Administration</h4>
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
                                <input type="submit" class="btn btn-primary" value="Enregistrer">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
