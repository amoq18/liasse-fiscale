@extends('layouts.app')

@section('css')
<style>
    /* input[type="file"] {
        display: none;
    } */
    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 10px;
        cursor: pointer;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Importation</h4>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-7">
                        <div class="row">
                            <label class="col-form-label col-md-3">Entreprise:</label>
                            <div class="col-md-9">
                                <select class="form-control" name="entreprise_exercice" id="entreprise_exercice">
                                    <option>-- Choisir --</option>
                                    @foreach ($entreprises as $entreprise)
                                        <optgroup label="{{ $entreprise->denomination }}">
                                            @foreach ($entreprise->exercices as $exercice)
                                                <option value="{{ (new Carbon\Carbon($exercice->date_fin))->format('Y') }}">
                                                    Exercice {{ (new Carbon\Carbon($exercice->date_fin))->format('d/m/Y') }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label col-md-5">Exercice:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="exercice">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{-- <button class="btn btn-primary">Import</button> --}}
                        <form action="{{ route('importation.excel') }}" method="post" enctype="multipart/form-data">
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
                </div>
                <div class="table-responsive">
                    <table class="table mb-0 table-hover table-sm table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th>ID</th>
                                <th>N° COMPTE</th>
                                <th>INTITULÉ</th>
                                <th>DEBIT DÉBUT</th>
                                <th>CRÉDIT DÉBUT</th>
                                <th>DEBIT MVT</th>
                                <th>CRÉDIT MVT</th>
                                <th>DEBIT FIN</th>
                                <th>CRÉDIT FIN</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($balances['0']))
                                @php
                                    $count = 1;
                                    $total_deb_periode_c = 0;
                                    $total_deb_periode_d = 0;
                                    $total_mvt_periode_c = 0;
                                    $total_mvt_periode_d = 0;
                                    $total_fin_periode_c = 0;
                                    $total_fin_periode_d = 0;
                                @endphp

                                @foreach ($balances as $balance)
                                <tr>
                                    <td>#{{ $count++ }}</td>
                                    <td>{{ $balance->numero_compte }}</td>
                                    <td>{{ $balance->intitule_compte }}</td>
                                    <td>{{ $balance->deb_periode_c }}</td>
                                    <td>{{ $balance->deb_periode_d }}</td>
                                    <td>{{ $balance->mvt_periode_c }}</td>
                                    <td>{{ $balance->mvt_periode_d }}</td>
                                    <td>{{ $balance->fin_periode_c }}</td>
                                    <td>{{ $balance->fin_periode_d }}</td>
                                    @php
                                        $total_deb_periode_c += (int)$balance->deb_periode_c;
                                        $total_deb_periode_d += (int)$balance->deb_periode_d;
                                        $total_mvt_periode_c += (int)$balance->mvt_periode_c;
                                        $total_mvt_periode_d += (int)$balance->mvt_periode_d;
                                        $total_fin_periode_c += (int)$balance->fin_periode_c;
                                        $total_fin_periode_d += (int)$balance->fin_periode_d;
                                    @endphp
                                </tr>
                                @endforeach
                                <tr class="table-success">
                                    <th>#{{ $count++ }}</th>
                                    <th> - </th>
                                    <th>TOTAL</th>
                                    <th>{{ $total_deb_periode_c }}</th>
                                    <th>{{ $total_deb_periode_d }}</th>
                                    <th>{{ $total_mvt_periode_c }}</th>
                                    <th>{{ $total_mvt_periode_d }}</th>
                                    <th>{{ $total_fin_periode_c }}</th>
                                    <th>{{ $total_fin_periode_d }}</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="text-right mt-4">
                        {{-- <a href="#" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Retour</a> --}}
                        <a href="" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Enregistrer</a>
                        {{-- @php
                            Brian2694\Toastr\Facades\Toastr::success('ook','Importation Excel');
                        @endphp --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('#entreprise_exercice').change(function () {
            $('#exercice').val(this.value)
        })
    });
</script>
@endsection
