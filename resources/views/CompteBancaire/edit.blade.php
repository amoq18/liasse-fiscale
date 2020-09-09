@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Modifier les informations sur la Banque</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('banque.edit', $banque->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <h4 class="card-title">Informations sur la nouvelle Banque</h4> --}}
                            <div class="form-group">
                                <label> Nom:</label>
                                <input type="text" name="nom_banque" class = "form-control" value="{{ $banque->nom }}" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> N° de Compte:</label>
                                <input type="text" name="numero_compte_banque" class = "form-control" value="{{ $banque->numero_compte }}">
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
