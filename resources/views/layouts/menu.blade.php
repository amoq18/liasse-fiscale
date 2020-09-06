<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="active">
                    <a href="#"><i class="fe fe-home"></i> <span>Accueil</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-building"></i> <span> Structure</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('structure.pays.index') }}">Liste des Pays</a></li>
                        <li><a href="{{ route('structure.banques.index') }}">Liste des Banques</a></li>
                        <li><a href="{{ route('structure.comptables.index') }}">Liste Plans Comptables</a></li>
                        <li><a href="{{ route('structure.impots.index') }}">Liste Centres d'Impôts</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-building"></i> <span> Entreprise</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('entreprise.create') }}">Créer</a></li>
                        <li><a href="{{ route('entreprise.index') }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-users"></i> <span>Staff</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('staff.create') }}">Créer</a></li>
                        <li><a href="{{ route('staff.index') }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-building"></i> <span> Banque</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('banque.create') }}">Créer</a></li>
                        <li><a href="{{ route('banque.index') }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Exercice</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('exercice.create') }}">Créer</a></li>
                        <li><a href="{{ route('exercice.index') }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-cogs"></i> <span> Traitement</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('importation.index') }}">Importation Balance</a></li>
                        <li><a href="#">Contrôle de conformité</a></li>
                        <li><a href="#">Contrôle de cohérence</a></li>
                        <li><a href="#">Génération Liasse</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Compte</span>
                </li>
            </ul>
        </div>
    </div>
</div>
