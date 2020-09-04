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
                    <a href="#"><i class="fa fa-building-o"></i> <span> Fichier Entreprise</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('entreprise.create') }}">Créer</a></li>
                        <li><a href="{{ route('entreprise.index') }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Staff</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>Staff dirigeant</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('staff.dirigeant.create') }}">Créer</a></li>
                                <li><a href="{{ route('staff.dirigeant.index') }}">Voir</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <span>CA </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('staff.ca.create') }}">Créer</a></li>
                                <li><a href="{{ route('staff.ca.index') }}">Voir</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-cart"></i> <span> Banque</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('banque.create') }}">Créer</a></li>
                        <li><a href="{{ route('banque.index') }}">Voir</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-cart"></i> <span> Exercice</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('exercice.create') }}">Créer</a></li>
                        <li><a href="{{ route('exercice.index') }}">Voir</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Compte</span>
                </li>
            </ul>
        </div>
    </div>
</div>
