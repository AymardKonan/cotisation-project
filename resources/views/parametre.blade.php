<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PARAMETRE</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="\resources\css\parametre.css">
  <script src ="resources\js\parametre.js"> </script>

</head>
<body>
  <!-- Header -->
  <div class="header">
    <div class="logo">
      <img src="images/CNPS.jpeg" alt="Logo">
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Recherche...">
      <button><i class="fas fa-search"></i></button>
    </div>
  </div>

  <!-- Sidebar -->
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

  <!-- Main content -->
  <div class="content">
    <div class="general-settings">
      <h1>Paramètres généraux</h1>
      
      <!-- Paramètres de configuration utilisateur -->
        <!-- Section: Paramètres généraux -->
        <section id="generalSettings" class="settings-section">
          <h2>Paramètres généraux</h2>
          <form>
              <label for="systemName">Nom du système :</label>
              <input type="text" id="systemName" placeholder="Nom du système">
  
              <label for="adminEmail">Email de l'administrateur :</label>
              <input type="email" id="adminEmail" placeholder="admin@example.com">
  
              <label for="timezone">Fuseau horaire :</label>
              <select id="timezone">
                  <option value="GMT">GMT</option>
                  <option value="CET">CET</option>
                  <option value="EST">EST</option>
                  <!-- Ajoutez d'autres options ici -->
              </select>
              <button type="submit" class="btn-action">Enregistrer</button>
          </form>
      </section>
      <section id="userSettings" class="settings-section">
          <h2>Paramètres de configuration utilisateur</h2>
          <form>
              <!-- Langue et région -->
              <h3>Langue et région</h3>
              <label for="language">Langue :</label>
              <select id="language">
                  <option value="fr">Français</option>
                  <option value="en">Anglais</option>
                  <option value="es">Espagnol</option>
              </select>
              
              <label for="timezone">Fuseau horaire :</label>
              <select id="timezone">
                  <option value="CET">CET (UTC+1)</option>
                  <option value="GMT">GMT (UTC+0)</option>
                  <option value="EST">EST (UTC-5)</option>
              </select>
  
              <!-- Roles et permissions -->
              <h3>Rôles et permissions</h3>
              <label for="userRoles">Définir des rôles :</label>
              <input type="text" id="userRoles" placeholder="Admin, Manager, Utilisateur, etc.">
              
              <!-- Personnalisation de l'interface -->
              <h3>Personnalisation de l'interface</h3>
              <label for="theme">Choix du thème :</label>
              <select id="theme">
                  <option value="light">Clair</option>
                  <option value="dark">Sombre</option>
              </select>
              
              <label for="notifications">Notifications activées :</label>
              <input type="checkbox" id="notifications" checked>
          </form>
      </section>
  
      <!-- Paramètres de sécurité -->
      <section id="securitySettings" class="settings-section">
          <h2>Paramètres de sécurité</h2>
          <form>
              <!-- Authentification -->
              <h3>Authentification</h3>
              <label for="authMethod">Méthode d'authentification :</label>
              <select id="authMethod">
                  <option value="password">Mot de passe</option>
                  <option value="2fa">Authentification à deux facteurs</option>
                  <option value="biometric">Authentification biométrique</option>
              </select>
              
              <!-- Protection des données -->
              <h3>Protection des données</h3>
              <label for="dataEncryption">Chiffrement des données :</label>
              <input type="checkbox" id="dataEncryption" checked>
              
              <!-- Contrôle d'accès -->
              <h3>Contrôle d'accès</h3>
              <label for="accessGroups">Groupes d'accès :</label>
              <input type="text" id="accessGroups" placeholder="Exemple : Administrateurs, Invités, etc.">
          </form>
      </section>
  
      <!-- Paramètres liés à l'intégration -->
      <!--section id="integrationSettings" class="settings-section">
          <h2>Paramètres liés à l'intégration</h2>
          <form>
              <label for="apiIntegration">Intégration API :</label>
              <input type="text" id="apiIntegration" placeholder="URL d'API tiers">
              
              <label for="importExport">Import/export de données :</label>
              <select id="importExport">
                  <option value="csv">CSV</option>
                  <option value="excel">Excel</option>
              </select>
          </form>
      </section-->
  
      <!-- Paramètres de gestion des données -->
      <section id="dataManagement" class="settings-section">
          <h2>Paramètres de gestion des données</h2>
          <form>
              <label for="backup">Créer une sauvegarde :</label>
              <button class="btn-action">Sauvegarder</button>
              
              <label for="dataRetention">Durée de conservation :</label>
              <input type="number" id="dataRetention" placeholder="Durée en années">
          </form>
      </section>
  
      <!-- Paramètres opérationnels -->
      <section id="operationalSettings" class="settings-section">
          <h2>Paramètres opérationnels</h2>
          <form>
              <label for="notificationsType">Notifications :</label>
              <select id="notificationsType">
                  <option value="email">Email</option>
                  <option value="push">Push</option>
              </select>
              
              <label for="workflowRules">Règles de workflow :</label>
              <textarea id="workflowRules" placeholder="Décrivez les règles ici"></textarea>
          </form>
      </section>
  
      <!-- Paramètres financiers -->
      <section id="financialSettings" class="settings-section">
          <h2>Paramètres financiers</h2>
          <form>
              <label for="currency">Devise :</label>
              <select id="currency">
                  <option value="EUR">EUR</option>
                  <option value="USD">USD</option>
                  <option value="GBP">GBP</option>
              </select>
          </form>
      </section>
  
      <!-- Paramètres de performance et de maintenance -->
      <section id="performanceSettings" class="settings-section">
          <h2>Paramètres de performance et de maintenance</h2>
          <form>
              <label for="serverLoad">Charge du serveur :</label>
              <input type="text" id="serverLoad" placeholder="Exemple : 50%">
          </form>
      </section>
  
      <!-- Paramètres de support et d'assistance -->
      <section id="supportSettings" class="settings-section">
          <h2>Paramètres de support et d'assistance</h2>
          <form>
              <label for="documentation">Documentation :</label>
              <a href="#" id="documentation">Voir la documentation</a>
          </form>
      </section>
  </div>
      <div class="settings-content">
  
          <!-- Section: Montants et types d'abonnement -->
          <section id="subscriptionSettings" class="settings-section">
              <h2>Montants et types d'abonnement</h2>
              <form>
                  <label for="subscriptionType">Type d'abonnement :</label>
                  <input type="text" id="subscriptionType" placeholder="Type d'abonnement">
  
                  <label for="amount">Montant (en €) :</label>
                  <input type="number" id="amount" placeholder="Montant">
  
                  <button type="submit" class="btn-action">Enregistrer</button>
              </form>
          </section>
  
          <!-- Section: Paramètres de devise et de taxe -->
          <section id="currencyTaxSettings" class="settings-section">
              <h2>Paramètres de devise et de taxe</h2>
              <form>
                  <label for="currency">Devise :</label>
                  <select id="currency">
                      <option value="XOF">XOF</option>
                      <option value="EUR">EUR</option>
                      <option value="USD">USD</option>
                      <option value="GBP">GBP</option>
                  </select>
  
                  <label for="taxRate">Taux de taxe (%) :</label>
                  <input type="number" id="taxRate" placeholder="Taux de taxe">
  
                  <button type="submit" class="btn-action">Enregistrer</button>
              </form>
          </section>
  
          <!-- Section: Sauvegarde et restauration -->
          <section id="backupRestore" class="settings-section">
              <h2>Sauvegarde et restauration</h2>
              <form>
                  <button type="button" class="btn-action">Créer une sauvegarde</button>
                  <label for="restoreFile">Importer une sauvegarde :</label>
                  <input type="file" id="restoreFile">
                  <button type="submit" class="btn-action">Restaurer</button>
              </form>
          </section>
          <!-- Fonctionnalités supplémentaires -->
      <div class="additional-features">
        <h2>Fonctionnalités supplémentaires</h2>
        <form>
            <h3>Configurer les services de courrier électronique/SMS automatisés</h3>
            <label for="emailService">Service de courrier électronique :</label>
            <input type="text" id="emailService" placeholder="SMTP ou service d'email">

            <label for="smsService">Service SMS :</label>
            <input type="text" id="smsService" placeholder="Service SMS API">

            <h3>Gérer les intégrations API</h3>
            <label for="paymentGateway">Passerelle de paiement :</label>
            <input type="text" id="paymentGateway" placeholder="URL de la passerelle de paiement">

            <h3>Définir les notifications et alertes</h3>
            <label for="systemAlerts">Notifications :</label>
            <textarea id="systemAlerts" placeholder="Message d'alerte ou de notification"></textarea>

            <button type="submit" class="btn-action">Enregistrer les paramètres</button>
        </form>
    </div>
      </div>
  
      
  </div>  
  </div>

  <!-- Footer -->
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

  <script>
    // Fonction pour changer la photo de profil
    function updateProfilePhoto(event) {
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function(e) {
        const profilePhoto = document.getElementById('profilePhoto');
        profilePhoto.src = e.target.result;
      };

      if (file) {
        reader.readAsDataURL(file);
      }
    }

    // Ajouter un événement de clic sur l'avatar
    document.getElementById('avatarClick').addEventListener('click', () => {
      document.getElementById('photoInput').click();
    });

    // Ajouter un événement pour le fichier sélectionné
    document.getElementById('photoInput').addEventListener('change', updateProfilePhoto);

    // Mettre à jour l'année actuelle dans le footer
    document.getElementById('current-year').textContent = new Date().getFullYear();
  </script>

</body>
</html>
