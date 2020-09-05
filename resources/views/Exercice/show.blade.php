@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informations sur l'Exercice</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Date de début:</label>
                            <input disabled type = text name = date_debut_exercice class = "form-control" value="{{ $exercice->date_debut }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Date de fin:</label>
                            <input disabled type = text name = date_fin_exercice class = "form-control" value="{{ $exercice->date_fin }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Exercice précedent:</label>
                            <input disabled type = text name = exercice_precedent_exercice class = "form-control" value="{{ $exercice->exercice_precedent }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Impot minimum:</label>
                            <input disabled type = text name = impot_minimum_exercice class = "form-control" value="{{ $exercice->impot_minimum }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Taux proportionnel:</label>
                            <input disabled type = text name = taux_proportionnel_exercice class = "form-control" value="{{ $exercice->taux_proportionnel }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Taux impot:</label>
                            <input disabled type = text name = taux_impot_exercice class = "form-control" value="{{ $exercice->taux_impot }}" >
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
