@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="card-title text-center text-light">Rounded justified</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-toggle="tab">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-toggle="tab" style="">Contrôle d'Equilibre</a></li>
                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3" data-toggle="tab" style="">Messages</a></li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                    Tab content 1 <br>
                    <a class="btn btn-primary" href="#solid-rounded-justified-tab2">btn 1</a>
                </div>

                {{-- Debut Tab 2 --}}
                <div class="tab-pane" id="solid-rounded-justified-tab2">
                    {{-- Total Ouverture --}}
                    <div class="mb-4">
                        <h5  class="font-weight-bold">Total Ouverture</h5>
                        <div class="table-responsived">
                            <table class="table mb-0 table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Débit</th>
                                        <th>Crédit</th>
                                        <th>Ecart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count = 1; @endphp
                                    {{-- @foreach ($conseilAdmins as $conseilAdmin) --}}
                                    <tr>
                                        <td>#{{ $count++ }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Total Mouvement --}}
                    <div class="mb-4">
                        <h5 class="font-weight-bold">Total Mouvement</h5>
                        <div class="table-responsived">
                            <table class="table mb-0 table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Débit</th>
                                        <th>Crédit</th>
                                        <th>Ecart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count = 1; @endphp
                                    {{-- @foreach ($conseilAdmins as $conseilAdmin) --}}
                                    <tr>
                                        <td>#{{ $count++ }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Compte Bilan --}}
                    <div class="mb-4">
                        <h5 class="font-weight-bold">Compte Bilan</h5>
                        <div class="table-responsived">
                            <table class="table mb-0 table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Débit</th>
                                        <th>Crédit</th>
                                        <th>Solde</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count = 1; @endphp
                                    {{-- @foreach ($conseilAdmins as $conseilAdmin) --}}
                                    <tr>
                                        <td>#{{ $count++ }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Compte Gestion --}}
                    <div class="mb-4">
                        <h5  class="font-weight-bold">Compte Gestion</h5>
                        <div class="table-responsived">
                            <table class="table mb-0 table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Débit</th>
                                        <th>Crédit</th>
                                        <th>Solde</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count = 1; @endphp
                                    {{-- @foreach ($conseilAdmins as $conseilAdmin) --}}
                                    <tr>
                                        <td>#{{ $count++ }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Fin Tab 2 --}}



                <div class="tab-pane" id="solid-rounded-justified-tab3">
                    Tab content 3
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script>
    $(document).ready(function () {

    });
</script>
@endsection
