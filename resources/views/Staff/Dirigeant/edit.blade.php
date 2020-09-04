@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier les informations sur le Staff dirigeant</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('staff.dirigeant.edit', $dirigeant->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title">Informations sur le nouveau Staff dirigeant</h4>
                            <div class="form-group">
                                <label> Nom:</label>
                                <input type = text name = nom_staff_dirigeant class = "form-control" value="{{ $dirigeant->nom }}" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Prénoms:</label>
                                <input type = text name = prenom_staff_dirigeant class = "form-control" value="{{ $dirigeant->prenom }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Qualité:</label>
                                <input type = text name = qualite_staff_dirigeant class = "form-control" value="{{ $dirigeant->qualite }}">
                            </div>
                        </div>
                    </div>
                    {{-- Submit --}}
                    <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="Enregistrer" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
