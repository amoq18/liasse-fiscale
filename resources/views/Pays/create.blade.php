@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(Session::has('success_pays_create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h5><strong>{{ Session::get('success_pays_create') }}</strong></h5>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Créer Pays</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Nom:</label>
                                <input required type = text name = nom_pays class = "form-control" value="">
                            </div>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="text-right">
                        <a href="{{ route('pays.index') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Retour</a>
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
