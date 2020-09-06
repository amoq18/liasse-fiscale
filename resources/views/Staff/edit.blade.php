@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(Session::has('success_staff_create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h5><strong>{{ Session::get('success_staff_create') }}</strong></h5>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Créer un Staff</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('staff.create') }}" method="POST">
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
                        <div class="col-md-12">
                            {{-- <h4 class="card-title">Choix de l'Entreprise</h4> --}}
                            {{-- <input type="text" name="test"> --}}
                            <div class="form-group row">
                                <label class="col-form-label col-md-1">Staff</label>
                                <div class="col-md-11">
                                    <div class="checkbox">
                                        <label class="mr-3">
                                            <input type="checkbox" id="dirigeant" name="dirigeant"> Dirigeant
                                        </label>
                                        <label>
                                            <input type="checkbox" id="conseilAdmin" name="conseilAdmin"> Conseil d'Administration
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Nom:</label>
                                        <input required type = text name = nom_staff class = "form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Prenom:</label>
                                        <input required type = text name = prenom_staff class = "form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Qualite:</label>
                                        <input required type = text name = qualite_staff class = "form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Nature:</label>
                                        <input type = text name = nature_apport_staff class = "form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Pourcentage:</label>
                                        <input type = text name = pourcentage_apport_staff class = "form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Valeur:</label>
                                        <input type = text name = valeur_apport_staff class = "form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
                                <a href="{{ route('staff.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o"></i> Enregistrer
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        // $(document).ready(function () {
        //     // }

        //     if ( $('input[name="dirigeant"]').click() ) {
        //         console.log('yes')
        //         $('input[name="nom_staff"]').show();
        //     }
        //     else {
        //         $('input[name="nom_staff"]').hide();
        //         console.log('no')
        //     }

        // });


        $(document).ready(function()
        {
            // Désactive tout les champs si le type de staff n'est pas selectionné
            $("input[name='nom_staff']").prop('disabled', true);
            $("input[name='prenom_staff']").prop('disabled', true);
            $("input[name='qualite_staff']").prop('disabled', true);
            $("input[name='nature_apport_staff']").prop('disabled', true);
            $("input[name='pourcentage_apport_staff']").prop('disabled', true);
            $("input[name='valeur_apport_staff']").prop('disabled', true);


            $("input[name='dirigeant']").click(function()
            {
                if ($( "input:checked" ).val() == 'on')
                {
                    $("input[name='nom_staff']").prop('disabled', false);
                    $("input[name='prenom_staff']").prop('disabled', false);
                    $("input[name='qualite_staff']").prop('disabled', false);
                }
                else
                {
                    $("input[name='nom_staff']").prop('disabled', true);
                    $("input[name='prenom_staff']").prop('disabled', true);
                    $("input[name='qualite_staff']").prop('disabled', true);
                }
            });
            $("input[name='conseilAdmin']").click(function(){
                if ($( "input:checked" ).val() == 'on')
                {
                    $("input[name='nom_staff']").prop('disabled', false);
                    $("input[name='prenom_staff']").prop('disabled', false);
                    $("input[name='qualite_staff']").prop('disabled', false);
                    $("input[name='nature_apport_staff']").prop('disabled', false);
                    $("input[name='pourcentage_apport_staff']").prop('disabled', false);
                    $("input[name='valeur_apport_staff']").prop('disabled', false);
                }
                else
                {
                    $("input[name='nom_staff']").prop('disabled', true);
                    $("input[name='prenom_staff']").prop('disabled', true);
                    $("input[name='qualite_staff']").prop('disabled', true);
                    $("input[name='nature_apport_staff']").prop('disabled', true);
                    $("input[name='pourcentage_apport_staff']").prop('disabled', true);
                    $("input[name='valeur_apport_staff']").prop('disabled', true);
                }
            });
        });

    </script>
@endsection
