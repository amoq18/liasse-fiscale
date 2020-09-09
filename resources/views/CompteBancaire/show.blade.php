@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informations sur la Banque de {{ $entreprise->denomination }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Nom de la Banque:</label>
                            <input type="text" disabled name="nom_banque" class="form-control text-capitalize" value="{{ $compte->banque->nom }}" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> N° de Compte:</label>
                            <input type="text" disabled name="numero_compte_banque" class="form-control text-uppercase" value="{{ $compte->numero_compte }}">
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
