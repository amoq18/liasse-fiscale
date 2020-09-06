@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier l'Exercice</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('exercice.edit', $exercice->id) }}" method="POST">
                    @csrf
                    <h5>Informations sur l'Exercice</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Date de début:</label>
                                <input type = date name = date_debut_exercice class = "form-control" value="{{ $exercice->date_debut }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Date de fin:</label>
                                <input type = date name = date_fin_exercice class = "form-control" value="{{ $exercice->date_fin }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Exercice précedent:</label>
                                <input type = text name = exercice_precedent_exercice class = "form-control" value="{{ $exercice->exercice_precedent }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Impot minimum:</label>
                                <input type = text name = impot_minimum_exercice class = "form-control" value="{{ $exercice->impot_minimum }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Taux proportionnel:</label>
                                <input type = text name = taux_proportionnel_exercice class = "form-control" value="{{ $exercice->taux_proportionnel }}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Taux impot:</label>
                                <input type = text name = taux_impot_exercice class = "form-control" value="{{ $exercice->taux_impot }}" >
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
                                        <option value="normale" {{ ($exercice->liasse_fiscale == "smt") ? "selected":"" }}>Normale</option>
                                        <option value="smt" {{ ($exercice->liasse_fiscale == "smt") ? selected :"" }}>SMT</option>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">
                                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Retour</a>
                                <input type="submit" class="btn btn-primary" value="Enregistrer">
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
        });
    </script>
@endsection
