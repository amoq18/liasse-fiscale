@extends('layouts.app')

@section('css')
{{-- <link href="https://unpkg.com/bootstrap-table@1.13.1/dist/bootstrap-table.min.css" rel="stylesheet"> --}}
<style>
    .table td {
        padding-left: 1.5rem !important;
   text-align: justify;
}
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-header bg-primary">
                <h4 class="card-title text-light text-center">Liste des Plans Comptables</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover table-bordered">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th>N° de Compte</th>
                                <th>Poste</th>
                                <th>Intitulé de compte</th>
                                <th>Nature</th>
                                <th>Solde débiteur</th>
                                <th>Solde créditeur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach ($plans_comptables as $plan_comptable)
                            <tr>
                                <td>#{{ $count++ }}</td>
                                <td class="{{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->numero_compte }}</td>
                                <td class="{{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->poste }}</td>
                                <td class="{{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->intitule_compte }}</td>
                                <td class="{{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->nature }}</td>
                                <td class="text-primary {{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->solde_debit }}</td>
                                <td class="text-danger {{ (strlen((string)$plan_comptable->numero_compte) <= 3) ? 'font-weight-bold' : '' }}">{{ $plan_comptable->solde_credit }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="text-right mt-2 mb-5">
            <a href="" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Contrôle de Conformité</a>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#entreprise_exercice').change(function() {
            $('#exercice').val(this.value)
        })

        // $.each('td', function () {
        var num = parseInt(Number(1000000).toLocaleString("en-EN"));

        // ar-MA: Maroc => 150.000
        // fr-FR: France => 150 000
        // en-EN: Etats Unis => 150,000

        function getNum(val) {
            if (isNaN(val)) {
                return 0;
            }
            return val;
        }

        $('table tr').each(function() {
            // var value = getNum(parseInt($(this).find(".mask-number").html()));
            // console.log(value)
            // var maskValue = (Number(value).toLocaleString("ar-MA"))



            // $(this).find(".mask-number").html(maskValue)
        });
    });

</script>
@endsection
