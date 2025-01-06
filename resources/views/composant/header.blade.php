<link rel="stylesheet" href="app.css">

<header class="header">
    <div class="logo">
        <img src="{{ asset('img/LOGOCNPS.jpeg') }}" alt="Logo">
    </div>
    <h1>Accueil</h1>
    <div class="search-filter">
        <input type="text" placeholder="Rechercher une entreprise..." class="search-bar">
        
        <select class="filter">
            <option value="">Filtre</option>
            <option value="Onma">Cotisation</option>
            <option value="Communication">Entreprise</option>
            <option value="Communication">Employés</option>
        </select>
        

        
        <button class="btn-filter"><i class="fa-solid fa-magnifying-glass"></i></button>
            <label for="ajouteEntreprise" class="btn-action"><i class="fa-solid fa-plus"></i></label>
    </div>
</header>