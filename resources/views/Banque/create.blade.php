@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Créer une nouvelle Banque</h4>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Informations sur la nouvelle Banque</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_banque',
                            ])
                            @include('snippets.input', [
                                'label' => 'N° de Compte',
                                'name' => 'numero_compte_banque',
                            ])
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
