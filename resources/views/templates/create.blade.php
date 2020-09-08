@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Créer </h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Titre</h4>
                            <div class="form-group">
                                <label> Label 1:</label>
                                <input required type="text" name="" class="form-control @error('boite_postale_entreprise') is-invalid @enderror" value="">
                                @error('boite_postale_entreprise') <span class="invalid-feedback">{{ $errors->first('boite_postale_entreprise') }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Label 2:</label>
                                <input required type="text" name="" class="form-control @error('boite_postale_entreprise') is-invalid @enderror" value="">
                                @error('boite_postale_entreprise') <span class="invalid-feedback">{{ $errors->first('boite_postale_entreprise') }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="text-right">
                        <a href="" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Retour</a>
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
