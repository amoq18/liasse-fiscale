@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Créer une nouvelle Banque</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('banque.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title">Informations sur la nouvelle Banque</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_banque',
                            ])
                            </div>
                        <div class="col-md-12">
                            @include('snippets.input', [
                                'label' => 'N° de Compte',
                                'name' => 'numero_compte_banque',
                            ])
                        </div>
                    </div>
                    <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
