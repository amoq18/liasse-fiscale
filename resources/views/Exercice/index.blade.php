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
        @foreach ($entreprises as $entreprise)
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Exercices de {{ $entreprise->denomination }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Nombre de mois</th>
                                <th>Année de référence</th>
                                <th>Exercice précédent</th>
                                <th>Impôt minimum</th>
                                <th>Taux proportionnel</th>
                                <th>Taux d'Impôt</th>
                                <th>Type Liasse Comptable</th>
                                <th>Type Liasse Fiscale</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($entreprise->exercices as $exercice)
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td>{{ (new Carbon\Carbon($exercice->date_debut))->format('d/m/Y') }}</td>
                                <td>{{ (new Carbon\Carbon($exercice->date_fin))->format('d/m/Y') }}</td>
                                <td>{{ (new Carbon\Carbon($exercice->date_fin))->diffInMonths((new Carbon\Carbon($exercice->date_debut))->format('d/m/Y')) }}</td>
                                <td>{{ (new Carbon\Carbon($exercice->date_fin))->format('Y') }}</td>
                                <td>{{ (new Carbon\Carbon($exercice->date_debut))->subDays(1)->format('d/m/Y') }}</td>
                                <td>{{ $exercice->impot_minimum }}</td>
                                <td>{{ $exercice->taux_proportionnel }}</td>
                                <td>{{ $exercice->taux_impot }}</td>
                                <td>{{ $exercice->liasse_comptable }}</td>
                                <td>{{ $exercice->liasse_fiscale }}</td>
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
        @endforeach
    </div>
</div>
@endsection
