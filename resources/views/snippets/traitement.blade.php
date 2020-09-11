
<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="card-title text-center text-light">Traitement</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                <li class="nav-item"><a class="nav-link {{ $state1 ?? ''}}" href="#solid-rounded-justified-tab1" data-toggle="tab">Contrôle de Conformité</a></li>
                <li class="nav-item"><a class="nav-link {{ $state2 ?? ''}}" href="#solid-rounded-justified-tab2" data-toggle="tab" style="">Contrôle d'Equilibre</a></li>
                <li class="nav-item"><a class="nav-link {{ $state3 ?? ''}}" href="#solid-rounded-justified-tab3" data-toggle="tab" style="">Contrôle de Cohérence</a></li>
            </ul>
            <div class="tab-content">
                {{-- Debut Tab 1 --}}
                <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                    {{-- Contrôle de Conformité --}}
                    <div class="mb-4">
                        {{-- <h5  class="font-weight-bold">Contrôle de Conformité</h5> --}}
                        <div class="table-responsived">
                            <table class="table mb-0 table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>N° Compte Balance</th>
                                        <th>Intitulé</th>
                                        <th>Observation</th>
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
                {{-- Fin tab 1 --}}

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

                {{-- Debut Tab 3 --}}
                <div class="tab-pane" id="solid-rounded-justified-tab3">
                    {{-- Compte Gestion --}}
                    <div class="mb-4">
                        {{-- <h5  class="font-weight-bold">Compte Gestion</h5> --}}
                        <div class="table-responsived">
                            <table class="table mb-0 table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>N° Compte Balance</th>
                                        <th>Intitulé</th>
                                        <th>Débit Fin</th>
                                        <th>Crédit Fin</th>
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
                {{-- Fin Tab 3 --}}
            </div>
        </div>
    </div>
</div>
