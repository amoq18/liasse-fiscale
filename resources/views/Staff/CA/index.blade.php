@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @if(Session::has('success_conseil_admin_modify'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('success_conseil_admin_modify') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @elseif(Session::has('success_conseil_admin_delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('success_conseil_admin_delete') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <div class="form-group text-right">
            <a href="{{ route('staff.ca.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un Conseil d'Administration</a>
        </div>
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Conseils d'Administrations</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Noms et Prénoms</th>
                                <th>Qualité</th>
                                <th>Nature apport</th>
                                <th>Pourcentage apport</th>
                                <th>Valeur apport</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($conseilAdmins as $conseilAdmin)
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td>{{ $conseilAdmin->nom.' '.$conseilAdmin->prenom }}</td>
                                <td>{{ $conseilAdmin->qualite }}</td>
                                <td>{{ $conseilAdmin->nature_apport }}</td>
                                <td>{{ $conseilAdmin->pourcentage_apport }}</td>
                                <td>{{ $conseilAdmin->valeur_apport }}</td>
                                <td>
                                    <a href="{{ route('staff.ca.show', $conseilAdmin->id) }}" class="btn btn-success btn-sm mr-1" title="Voir">
                                        <i class="fa fa-eye text-light"></i>
                                    </a>
                                    <a href="{{ route('staff.ca.edit', $conseilAdmin->id) }}" class="btn btn-warning btn-sm mr-1" title="Modifier">
                                        <i class="fa fa-pencil-square-o text-light"></i>
                                    </a>
                                    <a href="{{ route('staff.ca.delete', $conseilAdmin->id) }}" class="btn btn-danger btn-sm" data-toggle="modals" data-target="#deleteEntreprises" title="Supprimer">
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
