@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informations sur le Conseil d'Administration</h4>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Text Input</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Type de Staff:</label>
                            <input disabled type = text name = prenom_conseil_admin class = "form-control" value="{{ $staff->prenom }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Nom:</label>
                            <input disabled type = text name = nom_conseil_admin class = "form-control" value="{{ $staff->nom }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Prenom:</label>
                            <input disabled type = text name = prenom_conseil_admin class = "form-control" value="{{ $staff->prenom }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Qualite:</label>
                            <input disabled type = text name = qualite_conseil_admin class = "form-control" value="{{ $staff->qualite }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Nature:</label>
                            <input disabled type = text name = nature_apport_conseil_admin class = "form-control" value="{{ $staff->nature_apport }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Pourcentage:</label>
                            <input disabled type = text name = pourcentage_apport_conseil_admin class = "form-control" value="{{ $staff->pourcentage_apport }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Valeur:</label>
                            <input disabled type = text name = valeur_apport_conseil_admin class = "form-control" value="{{ $staff->valeur_apport }}" >
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
