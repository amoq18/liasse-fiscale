@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @if(Session::has('success_exercice_modify'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('success_exercice_modify') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @elseif(Session::has('success_exercice_delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('success_exercice_delete') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <div class="form-group text-right">
            <a href="{{ route('exercice.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un Exercice</a>
        </div>
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Exercices</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Exercice précédent</th>
                                <th>Impôt minimum</th>
                                <th>Taux proportionnel</th>
                                <th>Taux d'Impôt</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($exercices as $exercice)
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td>{{ $exercice->date_debut }}</td>
                                <td>{{ $exercice->date_fin }}</td>
                                <td>{{ $exercice->exercice_precedent }}</td>
                                <td>{{ $exercice->impot_minimum }}</td>
                                <td>{{ $exercice->taux_proportionnel }}</td>
                                <td>{{ $exercice->taux_impot }}</td>
                                <td>
                                    <a href="{{ route('exercice.show', $exercice->id) }}" class="btn btn-success btn-sm mr-1" title="Voir">
                                        <i class="fa fa-eye text-light"></i>
                                    </a>
                                    <a href="{{ route('exercice.edit', $exercice->id) }}" class="btn btn-warning btn-sm mr-1" title="Modifier">
                                        <i class="fa fa-pencil-square-o text-light"></i>
                                    </a>
                                    <a href="{{ route('exercice.delete', $exercice->id) }}" class="btn btn-danger btn-sm" data-toggle="modals" data-target="#deleteEntreprises" title="Supprimer">
                                        <i class="fa fa-close text-light"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
