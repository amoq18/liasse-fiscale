@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light">Créer un nouvel Exercice</h4>
            </div>
            <div class="card-body">

                {{-- <h4>Informations sur l'Exercice</h4> --}}
                <form action="{{ route('exercice.create') }}" method="POST">
                    @csrf
                    @if (Session::has('redirect'))
                        <input name="redirect" type="hidden" value="{{ Session::get('redirect') }}">
                    @endif
                    <div class="form-group row">
                        <label class="col-form-label col-md-1">Entreprise:</label>
                        <div class="col-md-11">
                            <select class="form-control" name="entreprise_id">
                                <option value="0">-- Choisir --</option>
                                @foreach ($entreprises as $entreprise)
                                    <option value="{{ $entreprise->id }}">{{ $entreprise->denomination }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Date de début:</label>
                                    <input required type="date" name=date_debut_exercice class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Date de fin:</label>
                                    <input required type = date name = date_fin_exercice class = "form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Exercice précedent:</label>
                                    <input required min="2019/12/01" type = date name = exercice_precedent_exercice class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Impôt minimum:</label>
                                    <input required type = number min="0" name = impot_minimum_exercice class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Taux proportionnel:</label>
                                    <input required type="number" min="0" name = taux_proportionnel_exercice placeholder="En %" class = "form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Taux impot:</label>
                                    <input required type="number" min="0" name = taux_impot_exercice placeholder="En %" class = "form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-form-label col-md-4">Type de Liasse Comptable:</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="type_liasse_comptable" id="select_liasse_comptable">
                                            <option>-- Choisir --</option>
                                            <option value="normale">Normale</option>
                                            <option value="smt">SMT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-form-label col-md-4">Type de Liasse Fiscale:</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="type_liasse_fiscale" id="select_liasse_fiscale">
                                            <option>-- Choisir --</option>
                                            <option class="type_normal" value="irpp">IRPP</option>
                                            <option class="type_normal" value="is">IS</option>
                                            <option class="type_normal" value="bic">BIC</option>
                                            <option class="type_smt" value="tps_pe">TPS / PE</option>
                                            <option class="type_smt" value="tps_me">TPS / ME</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="text-right">
                                    <a href="{{ route('exercice.index') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Retour</a>
                                    <button type="submit" class="btn btn-primary" id="exerciceSubmit">
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
        $(document).ready(function () {

            $('.type_normal').hide();
            $('.type_smt').hide();

            $('#select_liasse_comptable').on('change', function() {
                if (this.value == 'normale') {
                    $('.type_normal').show();
                    $('.type_smt').hide();
                }
                else if (this.value == 'smt') {
                    $('.type_smt').show();
                    $('.type_normal').hide();

                }
            });

            $('#exerciceSubmit').prop('disabled', true)

            $('select[name=entreprise_id]').change(function ()
            {
                if ($('select[name=entreprise_id]').val() == 0)
                {
                    $('#exerciceSubmit').prop('disabled', true)
                }
                else
                {
                    $('#exerciceSubmit').prop('disabled', false)
                }
            });


            // var today = moment().format('YYYY-MM-DD');

            // $('#datePicker').val(today);

            // $('#date_debut_exercice').val('today')
            $('input[name=date_debut_exercice]').val("2020-01-01")
            // $('date_fin_exercice').val('2020-01-03')
            // $('exercice_precedent_exercice').val('2020-12-31')



        });
    </script>
@endsection
