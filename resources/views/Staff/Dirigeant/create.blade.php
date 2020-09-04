@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Créer un nouveau Staff dirigeant</h4>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Informations sur le nouveau Staff dirigeant</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_staff_dirigeant',
                            ])
                            @include('snippets.input', [
                                'label' => 'Prenom',
                                'name' => 'prenom_staff_dirigeant',
                            ])
                            @include('snippets.input', [
                                'label' => 'Qualite',
                                'name' => 'qualite_staff_dirigeant',
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
