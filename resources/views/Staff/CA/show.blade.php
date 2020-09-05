@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informations sur le Conseil d'Administration</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Nom:</label>
                            <input disabled type = text name = nom_conseil_admin class = "form-control" value="{{ $conseilAdmin->nom }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Prenom:</label>
                            <input disabled type = text name = prenom_conseil_admin class = "form-control" value="{{ $conseilAdmin->prenom }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Qualite:</label>
                            <input disabled type = text name = qualite_conseil_admin class = "form-control" value="{{ $conseilAdmin->qualite }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Nature:</label>
                            <input disabled type = text name = nature_apport_conseil_admin class = "form-control" value="{{ $conseilAdmin->nature_apport }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Pourcentage:</label>
                            <input disabled type = text name = pourcentage_apport_conseil_admin class = "form-control" value="{{ $conseilAdmin->pourcentage_apport }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Valeur:</label>
                            <input disabled type = text name = valeur_apport_conseil_admin class = "form-control" value="{{ $conseilAdmin->valeur_apport }}" >
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
