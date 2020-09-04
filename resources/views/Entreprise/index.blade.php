@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @if(Session::has('success_entreprise_create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h5><strong>{{ Session::get('success_entreprise_create') }}</strong></h5>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @elseif(Session::has('success_entreprise_modify'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('success_entreprise_modify') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @elseif(Session::has('success_entreprise_delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('success_entreprise_delete') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <div class="form-group text-right">
            <a href="{{ route('entreprise.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter une Entreprise</a>
        </div>
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Entreprises</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cigle</th>
                                <th>Désignation</th>
                                <th>N° Rue</th>
                                <th>Téléphone</th>
                                <th>IFU</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($entreprises as $entreprise)
                                <tr>
                                    {{-- <td>#{{ $count++ }}</td> --}}
                                    <td>{{ $entreprise->id }}</td>
                                    <td>{{ $entreprise->cigle }}</td>
                                    <td>{{ $entreprise->denomination }}</td>
                                    <td>{{ $entreprise->numero_rue }}</td>
                                    <td>{{ $entreprise->telephone }}</td>
                                    <td>{{ $entreprise->ifu }}</td>
                                    <td>
                                        <a href="{{ route('entreprise.show', $entreprise->id) }}" class="btn btn-success btn-sm mr-1" title="Voir">
                                            <i class="fa fa-eye text-light"></i>
                                        </a>
                                        <a href="{{ route('entreprise.edit', $entreprise->id) }}" class="btn btn-warning btn-sm mr-1" title="Modifier">
                                            <i class="fa fa-pencil-square-o text-light"></i>
                                        </a>
                                        <a href="{{ route('entreprise.delete', $entreprise->id) }}" class="btn btn-danger btn-sm" data-toggle="modals" data-target="#deleteEntreprises" title="Supprimer">
                                            <i class="fa fa-close text-light"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @include('Entreprise.modal_delete_entreprise')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // $('.ok').click(function() {
    //     alert('ok')

    //     var id = $(this).data('idEntreprise');
    //     $('#id').val(id);
    //     } );
    // }
</script>
@endsection
