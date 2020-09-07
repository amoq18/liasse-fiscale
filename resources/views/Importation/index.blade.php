@extends('layouts.app')

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
                                        {{-- <option value="{{ $entreprise->id }}">{{ $entreprise->denomination }}</option> --}}
                                        <optgroup label="{{ $entreprise->denomination }}">
                                            @foreach ($entreprise->exercices as $exercice)
                                                <option value="{{ (new Carbon\Carbon($exercice->date_fin))->format('Y') }}">
                                                    {{ (new Carbon\Carbon($exercice->date_fin))->format('d-m-Y') }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- (new Carbon\Carbon($exercice->date_fin))->format('Y') --}}
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <label class="col-form-label col-md-5">Exercice:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="exercice">
                                {{-- <select class="form-control" name="entreprise_id">
                                    <option>-- Choisir --</option>
                                    @foreach ($exercices as $exercice)
                                        <option value="{{ $exercice->id }}">{{ $exercice->date_fin }}</option>
                                    @endforeach
                                </select> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{-- <button class="btn btn-primary">Import</button> --}}
                        <form action="{{ route('importation.excel') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="excel_file" id="" value="Importer">
                            <button type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0 table-hover table-sm table-bordered">
                        <thead>
                            <tr class="table-danger">
                                <th>ID</th>
                                <th>Numero de Compte</th>
                                <th>Intitule_compte</th>
                                <th>Début Période C</th>
                                <th>Début Période D</th>
                                <th>Mouvement Période C</th>
                                <th>Mouvement Période D</th>
                                <th>Fin Période C</th>
                                <th>Fin Période D</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($balances['0']))
                                @php $count = 1; @endphp
                                {{-- @dd($balances) --}}
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
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
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
