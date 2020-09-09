@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Créer la Banque</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('structure.banque.create') }}" method="POST">
                    @csrf
                    @if (Session::has('redirect'))
                        <input name="redirect" type="hidden" value="{{ Session::get('redirect') }}">
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title">Informations sur la nouvelle Banque</h4>
                            {{-- Nom banque --}}
                            <div class="form-group">
                                <label class="col-form-label">Cigle</label>
                                <input required type="text" name="cigle_banque" class="form-control text-uppercase @error('nom_banque') is-invalid @enderror" value="">
                                @error('nom_banque') <span class="invalid-feedback">{{ $errors->first('nom_banque') }}</span> @enderror
                            </div>
                            {{-- Dénomination banque --}}
                            <div class="form-group">
                                <label class="col-form-label">Dénomination</label>
                                <input required type="text" name="denomination_banque" class="form-control text-capitalize @error('denomination_banque') is-invalid @enderror" value="">
                                @error('denomination_banque') <span class="invalid-feedback">{{ $errors->first('denomination_banque') }}</span> @enderror
                            </div>
                            {{-- Code banque --}}
                            <div class="form-group">
                                <label class="col-form-label">Code</label>
                                <input required type="text" name="code_banque" class="form-control text-uppercase @error('code_banque') is-invalid @enderror" value="">
                                @error('code_banque') <span class="invalid-feedback">{{ $errors->first('code_banque') }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="text-right">
                        <a href="{{ route('structure.banque.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
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
