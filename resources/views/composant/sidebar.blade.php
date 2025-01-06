<div class="sidebar">
    <div class="profile">
            <!-- Avatar -->
            <div class="avatar" id="avatarClick">
                <img id="profilePhoto" src="https://via.placeholder.com/100" alt="Avatar"> <!-- Changez cette URL -->
                <input type="file" id="photoInput" accept="image/*" style="display: none;">
            </div>
            <div class="user-info">
                <div class="name" id="userName">John Doe</div>
                <div class="location" id="userLocation">Paris, France</div> <!-- La ville et le pays sont réduits ici -->
            </div>
        </div>
        <ul>
            <li class="dropdown">                
                <li class="dropdown">
                    <a href="{{ route('dashboard') }}" class="dropdown-toggle">
                        <i class="fas fa-tachometer-alt"></i></i>Accueil
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Widgets</a></li>
                        <li><a href="#">Liens rapides</a></li>
                        <li><a href="#">Représentation graphique</a></li>
                    </ul>
                </li>
            </li>
            <li class="dropdown">                
                <li class="dropdown">
                    <a href="{{ route('emplois&departement') }}" class="dropdown-toggle">
                        <i class="fas fa-users"></i></i>Employés
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('employes') }}">Enregistrer un employé</a></li>
                        <li><a href="{{ route('employes') }}">Rapport de contribution par service</a></li>
                    </ul>
                </li>
            </li>
            <li><a href="{{ route('cotisation') }}"><i class="fas fa-money-bill-wave"></i> Cotisations</a></li>
            <li><a href="{{ route('entreprise') }}"><i class="fa-regular fa-building "></i> Entreprises </a></li>
            <li class="dropdown">                
                <li class="dropdown">
                    <a href="{{ route('emplois&departement') }}" class="dropdown-toggle">
                        <i class="fa-solid fa-briefcase"></i></i>Emplois & Departements
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('emplois&departement') }}">Roles</a></li>
                        <li><a href="{{ route('Rapportemplois&departement') }}">Rapport de contribution par service</a></li>
                    </ul>
                </li>
            </li>
            <li><a href="{{ route('Localites') }}"><i class="fa-solid fa-location-dot"></i> Localités</a></li>
            <li><a href="{{ route('rapportglobale') }}"><i class="fas fa-list"></i>Rapport</a></li>
            
            <li><a href="#"><i class="fa-solid fa-bell"></i>Notifications</a></li>
            <li><a href="Audit.html"><i class="fas fa-file-signature"></i>Audits</a></li>
            <li><a href="Document.html"><i class="fa-solid fa-file"></i>Documents</a></li>
            <li><a href="Utilisateurs.html"><i class="fa-solid fa-user"></i>Utiliisareurs</a></li>
            <li><a href="Parametre.html"><i class="fa-solid fa-gear"></i>Paramètres</a></li>
            <li><a href="aide_assistance.html"><i class="fa-solid fa-circle-info"></i>Aide & Assistance</a></li>
        </ul>
        <a href="login.html">
            <button class="signout">
                <i class="fas fa-sign-out-alt"></i> Déconnexion
            </button>
        </a>
        
</div>