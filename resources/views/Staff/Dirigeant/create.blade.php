@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Créer un nouveau Staff dirigeant</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('staff.dirigeant.create') }}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title">Informations sur le nouveau Staff dirigeant</h4>
                                @include('snippets.input', [
                                    'label' => 'Nom',
                                    'name' => 'nom_staff_dirigeant',
                                ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @include('snippets.input', [
                                    'label' => 'Prénoms',
                                    'name' => 'prenom_staff_dirigeant',
                                ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @include('snippets.input', [
                                    'label' => 'Qualité',
                                    'name' => 'qualite_staff_dirigeant',
                                ])
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-right">
                            <input type="submit" class="btn btn-primary" value="Enregistrer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
