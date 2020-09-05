@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @if(Session::has('success_banque_create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h5><strong>{{ Session::get('success_banque_create') }}</strong></h5>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Créer une nouvelle Banque</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('banque.create') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-md-1">Entreprise:</label>
                        <div class="col-md-11">
                            <select class="form-control" name="entreprise_id">
                                <option>-- Choisir --</option>
                                @foreach ($entreprises as $entreprise)
                                    <option value="{{ $entreprise->id }}">{{ $entreprise->denomination }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="card-title">Informations sur la nouvelle Banque</h4>
                            @include('snippets.input', [
                                'label' => 'Nom',
                                'name' => 'nom_banque',
                            ])
                            </div>
                        <div class="col-sm-12">
                            @include('snippets.input', [
                                'label' => 'N° de Compte',
                                'name' => 'numero_compte_banque',
                            ])
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('banque.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-floppy-o"></i> Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
