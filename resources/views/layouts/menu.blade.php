<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="">
                    <a href="#" class="{{ Request::is('home*') ? 'active font-weight-bold' : '' }}">
                        <i class="fe fe-home"></i> <span>Accueil</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('structure*') ? 'active font-weight-bold' : '' }}">
                        <i class="fe fe-building"></i> <span> Structure</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('pays.index') }}" class="{{ Route::currentRouteName() == 'pays.index' ? 'bg-primary-light font-weight-bold' : '' }}">Liste des Pays</a></li>
                        <li><a href="{{ route('structure.banque.index') }}" class="{{ Route::currentRouteName() == 'structure.banque.index' ? 'bg-primary-light font-weight-bold' : '' }}">Liste des Banques</a></li>
                        <li><a href="{{ route('structure.plans_comptables.index') }}" class="{{ Route::currentRouteName() == 'structure.plans_comptables.index' ? 'bg-primary-light font-weight-bold' : '' }}">Liste Plans Comptables</a></li>
                        <li><a href="{{ route('structure.centre_impots.index') }}" class="{{ Route::currentRouteName() == 'structure.centre_impots.index' ? 'bg-primary-light font-weight-bold' : '' }}">Liste Centres d'Impôts</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('entreprise*') ? 'active font-weight-bold' : '' }}">
                        <i class="fe fe-building"></i> <span> Entreprise</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('entreprise.create') }}" class="{{ Route::currentRouteName() == 'entreprise.create' ? 'bg-primary-light font-weight-bold' : '' }}">Créer</a></li>
                        <li><a href="{{ route('entreprise.index') }}" class="{{ Route::currentRouteName() == 'entreprise.index' ? 'bg-primary-light font-weight-bold' : '' }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('staff*') ? 'active font-weight-bold' : '' }}">
                        <i class="fe fe-users"></i> <span>Staff</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('staff.create') }}" class="{{ Route::currentRouteName() == 'staff.create' ? 'bg-primary-light font-weight-bold' : '' }}">Créer</a></li>
                        <li><a href="{{ route('staff.index') }}" class="{{ Route::currentRouteName() == 'staff.index' ? 'bg-primary-light font-weight-bold' : '' }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('banque*') ? 'active font-weight-bold' : '' }}">
                        <i class="fe fe-building"></i> <span> Banque</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('compte-bancaire.create') }}" class="{{ Route::currentRouteName() == 'banque.create' ? 'bg-primary-light font-weight-bold' : '' }}">Créer</a></li>
                        <li><a href="{{ route('banque.index') }}" class="{{ Route::currentRouteName() == 'banque.index' ? 'bg-primary-light font-weight-bold' : '' }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('exercice*') ? 'active font-weight-bold' : '' }}">
                        <i class="fe fe-document"></i> <span> Exercice</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('exercice.create') }}" class="{{ Route::currentRouteName() == 'exercice.create' ? 'bg-primary-light font-weight-bold' : '' }}">Créer</a></li>
                        <li><a href="{{ route('exercice.index') }}" class="{{ Route::currentRouteName() == 'exercice.index' ? 'bg-primary-light font-weight-bold' : '' }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('importation*') ? 'active font-weight-bold' : ''}}">
                        <i class="fa fa-cogs"></i> <span> Traitement</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('importation.index') }}" class="{{ Route::currentRouteName() == 'importation.index' ? 'bg-primary-light font-weight-bold' : '' }}">Importation Balance</a></li>
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
