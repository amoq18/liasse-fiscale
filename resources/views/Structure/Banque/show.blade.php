@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Informations sur la Banque {{ $banque->nom }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        {{-- Dénomination banque --}}
                        <div class="form-group">
                            <label class="col-form-label">Dénomination</label>
                            <input disabled type="text" name="denomination_banque" class="form-control text-uppercase" value="{{ $banque->denomination }}">
                        </div>
                        {{-- Code banque --}}
                        <div class="form-group">
                            <label class="col-form-label">Code</label>
                            <input disabled type="text" name="code_banque" class="form-control text-uppercase" value="{{ $banque->code }}">
                        </div>
                    </div>
                </div>

                {{-- Close button --}}
                <div class="text-right">
                    <a href="{{ route('structure.banque.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
