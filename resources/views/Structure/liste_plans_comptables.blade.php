@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @if(Session::has('_modify'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('_modify') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @elseif(Session::has('_delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5><strong>{{ Session::get('_delete') }}</strong></h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <div class="form-group text-right">
            {{-- <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un Plan Comptable</a> --}}
            <form action="{{ route('structure.plan-comptable.excel') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- <label for="">Importer</label> --}}
                <input type="file" name="excel_file" id="excel_file">
                <button type="submit">Envoyer</button>
                {{-- <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Custom Upload
                </label>
                <input id="file-upload" type="file"/> --}}
            </form>
        </div>
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Plans Comptables</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>N° de Compte</th>
                                <th>Poste</th>
                                <th>Intitulé de compte</th>
                                <th>Nature</th>
                                <th>Solde débiteur</th>
                                <th>Solde créditeur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($plans_comptables as $plan_comptable)
                            <tr>
                                {{-- @dd($plans_comptables) --}}
                                <td>#{{ $count++ }}</td>
                                <td class="{{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->numero_compte }}</td>
                                <td class="{{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->poste }}</td>
                                <td class="{{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->intitule_compte }}</td>
                                <td class="{{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->nature }}</td>
                                <td class="text-primary {{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->solde_debit }}</td>
                                <td class="text-danger {{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->solde_credit }}</td>
                                {{-- <td> --}}
                                    {{-- <a href="#" class="btn btn-success btn-sm mr-1" title="Voir">
                                        <i class="fa fa-eye text-light"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm mr-1" title="Modifier">
                                        <i class="fa fa-pencil-square-o text-light"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modals" data-target="#deleteEntreprises" title="Supprimer">
                                        <i class="fa fa-close text-light"></i>
                                    </a> --}}
                                {{-- </td> --}}
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
