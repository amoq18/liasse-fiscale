@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier l'Exercice</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('exercice.edit', $exercice->id) }}" method="POST">
                    @csrf
                    <h5>Informations sur l'Exercice</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Date de début:</label>
                                <input type = date name = date_debut_exercice class = "form-control" value="{{ $exercice->date_debut }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Date de fin:</label>
                                <input type = date name = date_fin_exercice class = "form-control" value="{{ $exercice->date_fin }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Exercice précedent:</label>
                                <input type = text name = exercice_precedent_exercice class = "form-control" value="{{ $exercice->exercice_precedent }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Impot minimum:</label>
                                <input type = text name = impot_minimum_exercice class = "form-control" value="{{ $exercice->impot_minimum }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Taux proportionnel:</label>
                                <input type = text name = taux_proportionnel_exercice class = "form-control" value="{{ $exercice->taux_proportionnel }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Taux impot:</label>
                                <input type = text name = taux_impot_exercice class = "form-control" value="{{ $exercice->taux_impot }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
                                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Retour</a>
                                <input type="submit" class="btn btn-primary" value="Enregistrer">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
