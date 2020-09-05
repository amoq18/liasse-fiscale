@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Créer un Staff</h4>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="col-form-label col-md-2">Entreprise:</label>
                        <div class="col-md-10">
                            <select class="form-control" name="entreprise_id">
                                <option>-- Choisir --</option>
                                @foreach ($entreprises as $entreprise)
                                    <option value="{{ $entreprise->id }}">{{ $entreprise->denomination }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label col-md-2">Exercice:</label>
                        <div class="col-md-10">
                            <select class="form-control" name="entreprise_id">
                                <option>-- Choisir --</option>
                                @foreach ($exercices as $exercice)
                                    <option value="{{ $exercice->id }}">{{ $exercice->date_fin }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
