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
                        <h4 class="card-title">Informations sur le nouveau Staff dirigeant</h4>
                        <div class="form-group">
                            <label> Nom:</label>
                            <input disabled type = text name = nom_staff_dirigeant class = "form-control" value="{{ $dirigeant->nom }}" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Prénoms:</label>
                            <input disabled type = text name = prenom_staff_dirigeant class = "form-control" value="{{ $dirigeant->prenom }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Qualité:</label>
                            <input disabled type = text name = qualite_staff_dirigeant class = "form-control" value="{{ $dirigeant->qualite }}">
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
