@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Numéro de Compte pour la Banque</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('compte-bancaire.create') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Entreprise:</label>
                        <div class="col-md-10">
                            <select class="form-control" name="entreprise_id">
                                <option value="0">-- Choisir --</option>
                                @foreach ($entreprises as $entreprise)
                                    <option value="{{ $entreprise->id }}">{{ $entreprise->denomination }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Banque:</label>
                        <div class="col-md-10">
                            <select class="form-control" name="banque_id">
                                <option value="0">-- Choisir --</option>
                                @foreach ($banques as $banque)
                                    <option value="{{ $banque->id }}">{{ $banque->denomination }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">N° de Compte</label>
                        <div class="col-md-10">
                            <input type="number" min="0" name="numero_compte_bancaire" class="form-control">
                        </div>
                    </div>
                    {{-- Intitulé Compte --}}
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Intitulé Compte</label>
                        <div class="col-md-10">
                            <input required type="text" name="intitule_compte_bancaire" class="form-control @error('') is-invalid @enderror" value="">
                            @error('') <span class="invalid-feedback">{{ $errors->first('') }}</span> @enderror
                        </div>
                    </div>
                    {{-- submit --}}
                    <div class="text-right">
                        <a href="{{ route('banque.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
                        <button type="submit" class="btn btn-primary" id="submit">
                            <i class="fa fa-floppy-o"></i> Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#submit').prop('disabled', true);

            $('select[name=entreprise_id]').change(function () {
                if (this.value == 0) {
                    $('#submit').prop('disabled', true);
                }
                else {
                    $('#submit').prop('disabled', false);
                }
            });

            $('select[name=banque_id]').change(function () {
                if (this.value == 0) {
                    $('#submit').prop('disabled', true);
                }
                else {
                    $('#submit').prop('disabled', false);
                }
            });
        });
    </script>
@endsection
