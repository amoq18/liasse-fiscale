@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        {{-- <div class="form-group text-right">
            <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter </a>
        </div> --}}
        <div class="card card-tab
        le">
            <div class="card-header">
                <h4 class="card-title">Aperçu des Etats</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Bilan</th>
                                <th>Résultat</th>
                                <th>TFT - Analyse</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            {{-- @foreach ($conseilAdmins as $conseilAdmin) --}}
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td>Bilan</td>
                                <td>Résultat</td>
                                <td>TFT - Analyse</td>
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
                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
