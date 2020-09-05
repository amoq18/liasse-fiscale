@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(Session::has('success_exercice_create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h5><strong>{{ Session::get('success_exercice_create') }}</strong></h5>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Créer un nouvel Exercice</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('exercice.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">Informations sur le nouvel Exercice</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Date de début',
                                        'name' => 'date_debut_exercice',
                                        'type' => 'date',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Date de fin',
                                        'name' => 'date_fin_exercice',
                                        'type' => 'date',
                                    ])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Exercice précedent',
                                        'name' => 'exercice_precedent_exercice',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Impot minimum',
                                        'name' => 'impot_minimum_exercice',
                                    ])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Taux proportionnel',
                                        'name' => 'taux_proportionnel_exercice',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('snippets.input', [
                                        'label' => 'Taux impot',
                                        'name' => 'taux_impot_exercice',
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
                                <a href="{{ route('exercice.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
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