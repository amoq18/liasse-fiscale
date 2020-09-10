@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Créer Pays</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('pays.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Nom:</label>
                                <input required type="text" name="nom_pays" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    {{-- Code --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Code:</label>
                                <input required type="text" name="code_pays" placeholder="Ex: +229" class="form-control @error('code_pays') is-invalid @enderror" value="">
                                @error('code_pays') <span class="invalid-feedback">{{ $errors->first('code_pays') }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    {{-- Submit --}}
                    <div class="text-right">
                        <a href="{{ route('pays.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
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
