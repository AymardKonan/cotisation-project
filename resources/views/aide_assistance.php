<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aide et Assistance</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="resources/css/aide_assistance.css">
</head>
<body>
  <!-- Header Section -->
  <header class="header">
    <div class="logo">
      <img src="images/CNPS.jpeg" alt="Logo">
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Recherche...">
      <button><i class="fas fa-search"></i></button>
    </div>
  </header>

  <!-- Sidebar Section -->
  <aside class="sidebar">
    <div class="profile">
      <div class="avatar" id="avatarClick">
        <img id="profilePhoto" src="https://via.placeholder.com/100" alt="Avatar">
        <input type="file" id="photoInput" accept="image/*" style="display: none;">
      </div>
      <div class="user-info">
        <div class="name" id="userName">John Doe</div>
        <div class="location" id="userLocation">Paris, France</div>
      </div>
    </div>
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
             <li><a href="accueil.html"><i class="fas fa-tachometer-alt"></i> Accueil</a></li>
             <li><a href="Employés.html"><i class="fas fa-users"></i> Employés</a></li>
             <li><a href="cotisation.html"><i class="fas fa-money-bill-wave"></i> Cotisations</a></li>
             <li><a href="listeEntreprise.html"><i class="fa-regular fa-building "></i> Entreprises </a></li>
             <li class="dropdown">                
                 <li class="dropdown">
                     <a href="roleserve.html" class="dropdown-toggle">
                         <i class="fa-solid fa-briefcase"></i></i>Emplois & Departements
                         <i class="fas fa-chevron-down"></i>
                     </a>
                     <ul class="dropdown-menu">
                         <li><a href="roleserve.html">Roles</a></li>
                         <li><a href="rapport.html">Rapport de contribution par service</a></li>
                     </ul>
                 </li>
             </li>
              <li><a href="Localites.html"><i class="fa-solid fa-location-dot"></i> Localités</a></li>
              <li><a href="rapport.html"><i class="fas fa-list"></i>Rapport</a></li>
             
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

  </aside>

  <!-- Main Content Section -->
  <main class="content">
    <h1>Aide et Assistance</h1>
    <section>
      <h2>Foire Aux Questions (FAQ)</h2>
      <p>Consultez les réponses aux questions les plus fréquentes pour résoudre rapidement vos problèmes.</p>
      <ul>
        <li><a href="#">Comment réinitialiser mon mot de passe ?</a></li>
        <li><a href="#">Comment modifier mes informations personnelles ?</a></li>
        <li><a href="#">Comment contacter le support technique ?</a></li>
      </ul>
    </section>

    <section>
      <h2>Contactez-nous</h2>
      <p>Si vous avez besoin d'une assistance supplémentaire, n'hésitez pas à nous contacter :</p>
      <ul>
        <li>Email : <a href="mailto:support@cnps.com">support@cnps.com</a></li>
        <li>Téléphone : +225 1 23 45 67 89</li>
        <li>Adresse : 123 Rue de l'Assistance, Abidjan, Côte d'Ivoire</li>
      </ul>
    </section>

    <section>
      <h2>Documentation</h2>
      <p>Accédez à notre documentation complète pour comprendre toutes les fonctionnalités :</p>
      <a href="documentation.html" class="btn-action">Voir la documentation</a>
    </section>
  </main>

  <!-- Footer Section -->
  <footer class="w-full py-2 mt-6 text-xs text-gray-700 bg-white-200">
    <div class="container mx-auto text-center">
        <p>
            <span class="font-semibold">CNPS</span>
            <i class="far fa-copyright"></i>
            <span>2024 - <span id="current-year"></span></span>
        </p>
        <p class="mt-1">
            Powered by 
            <a href="https://onma.io" class="relative inline-block group" target="_blank">
                <img src="logo-removebg-onma.png" alt="Logo" 
                    class="inline-block transition-transform duration-300 transform rounded-full hover:scale-105" 
                    style="height:20px; width:50px; object-fit: scale-down;">
            </a>
        </p>
    </div>
</footer>  

  <script src="scripts.js"></script>
</body>
</html>
