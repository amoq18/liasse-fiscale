@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier les informations sur la Banque</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title">Informations sur la nouvelle Banque</h4>
                        <div class="form-group">
                            <label> Nom:</label>
                            <input type = text disabled name = nom_banque class = "form-control" value="{{ $banque->nom }}" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> N° de Compte:</label>
                            <input type = text disabled name = numero_compte_banque class = "form-control" value="{{ $banque->numero_compte }}">
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
