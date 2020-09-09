@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @if(Session::has('success_banque_modify'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('success_banque_modify') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @elseif(Session::has('success_banque_delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('success_banque_delete') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="page-title">Banques par Entreprises</h2>
            </div>
            <div class="col-md-6">
                <div class="text-right">
                    <a href="{{ route('banque.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter une Banque</a>
                </div>
            </div>
        </div>

        @foreach ($entreprises as $entreprise)
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Banques de {{ $entreprise->denomination }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Entreprise</th>
                                <th>Numero de compte</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($entreprise->numero_comptes as $numero_compte)
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td>{{ $numero_compte->banque->nom }}</td>
                                <td>Entreprise</td>
                                <td>{{ $numero_compte->numero_compte }}</td>
                                <td>
                                    <a href="{{ route('banque.show', ['idEntreprise' => $entreprise->id, 'idCompte' => $numero_compte->id]) }}" class="btn btn-success btn-sm mr-1" title="Voir">
                                        <i class="fa fa-eye text-light"></i>
                                    </a>
                                    <a href="{{ route('banque.edit', ['idEntreprise' => $entreprise->id, 'idCompte' => $numero_compte->id]) }}" class="btn btn-warning btn-sm mr-1" title="Modifier">
                                        <i class="fa fa-pencil-square-o text-light"></i>
                                    </a>
                                    <a href="{{ route('banque.delete', ['idEntreprise' => $entreprise->id, 'idCompte' => $numero_compte->id]) }}" class="btn btn-danger btn-sm" data-toggle="modals" data-target="#deleteEntreprises" title="Supprimer">
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

