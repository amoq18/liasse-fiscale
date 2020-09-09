@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="form-group text-right">
            <a href="{{ route('structure.banque.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter une Banque</a>
        </div>
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Banques </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Dénomination</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($banques as $banque)
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td class="text-uppercase">{{ $banque->code }}</td>
                                <td class="text-uppercase">{{ $banque->denomination }}</td>
                                <td>
                                    <a href="{{ route('structure.banque.show', $banque->id) }}" class="btn btn-success btn-sm mr-1" title="Voir">
                                        <i class="fa fa-eye text-light"></i>
                                    </a>
                                    <a href="{{ route('structure.banque.edit', $banque->id) }}" class="btn btn-warning btn-sm mr-1" title="Modifier">
                                        <i class="fa fa-pencil-square-o text-light"></i>
                                    </a>
                                    <a href="{{ route('structure.banque.delete', $banque->id) }}" class="btn btn-danger btn-sm" data-toggle="modals" data-target="#deleteEntreprises" title="Supprimer">
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

