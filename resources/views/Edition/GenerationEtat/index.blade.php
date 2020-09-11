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
                <h4 class="card-title">Génération des Etats</h4>
            </div>
            <div class="card-body">
                {{-- <div class="table-responsive">
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
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td>Bilan</td>
                                <td>Résultat</td>
                                <td>TFT - Analyse</td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
