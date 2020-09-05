@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier ce Conseil d'Administration</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('staff.ca.edit', $conseilAdmin->id) }}" method="POST">
                    @csrf
                    <h5 class="card-title">Nouvelles informations sur ce Conseil d'Administration</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Nom:</label>
                                <input type = text name = nom_conseil_admin class = "form-control" value="{{ $conseilAdmin->nom }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Prenom:</label>
                                <input type = text name = prenom_conseil_admin class = "form-control" value="{{ $conseilAdmin->prenom }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Qualite:</label>
                                <input type = text name = qualite_conseil_admin class = "form-control" value="{{ $conseilAdmin->qualite }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Nature:</label>
                                <input type = text name = nature_apport_conseil_admin class = "form-control" value="{{ $conseilAdmin->nature_apport }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Pourcentage:</label>
                                <input type = text name = pourcentage_apport_conseil_admin class = "form-control" value="{{ $conseilAdmin->pourcentage_apport }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Valeur:</label>
                                <input type = text name = valeur_apport_conseil_admin class = "form-control" value="{{ $conseilAdmin->valeur_apport }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
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
