@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @if(Session::has('pays_modify'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('pays_modify') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @elseif(Session::has('pays_delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('pays_delete') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <div class="form-group text-right">
            <a href="{{ route('pays.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter Pays </a>
        </div>
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Pays</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Nom</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($pays as $pay)
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td>{{ $pay->code }}</td>
                                <td>{{ $pay->nom }}</td>
                                {{-- <td>
                                    <a href="#" class="btn btn-success btn-sm mr-1" title="Voir">
                                        <i class="fa fa-eye text-light"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm mr-1" title="Modifier">
                                        <i class="fa fa-pencil-square-o text-light"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modals" data-target="#deleteEntreprises" title="Supprimer">
                                        <i class="fa fa-close text-light"></i>
                                    </a>
                                </td> --}}
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
