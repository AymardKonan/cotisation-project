<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTILISATEURS</title>
    <link rel="stylesheet" href="En.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="/resources/css/utilisateur.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</head>
<body>
    <header class="header">
        <h1>UTILISATEURS</h1>
        <div class="search-filter">
            <input type="text" placeholder="Rechercher un utilisateur..." class="search-bar">
            <select class="filter">
                <option value="">utilisateurs</option>
                <option value="adminuser">Administrateurs</option>
                <option value="level2">Editeurs</option>
                <option value="level6">autres</option>
            </select>

            <button class="btn-filter"><i class="fa-solid fa-magnifying-glass"></i></button>
             <label for="ajouteCotisation" class="btn-action"><i class="fa-solid fa-plus"></i></label>
        </div>
    </header>
    
    <main>
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
             <button class="signout"><i class="fas fa-sign-out-alt"></i> Deconnexion</button>
         </div>
         <div class="content">
 
             <div class="ex-imp">
              
                 <label for="importExcelModal" class="btn-action"><i class="fa-solid fa-upload"></i></label>
                 <!-- Bouton pour ouvrir le modal -->
                 <label for="exportExcelModal" class="btn-action"><i class="fa-solid fa-file-export"></i></label>
             </div>
             <input type="checkbox" id="importExcelModal" class="modal-toggle">
             <div class="import-modal"> 
                 <div class="modal-content">
                     <div class="import-header">
                         <h2>Importer un fichier Excel</h2>
                     </div>
                     <form class="import-form" action="#" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                             <label for="excelFile">Sélectionnez un fichier Excel :</label>
                             <input type="file" id="excelFile" name="excelFile" accept=".xlsx, .xls" required>
                         </div>
                         <div class="form-actions">
                             <button type="submit" class="btn-action">Importer</button>
                             <label for="importExcelModal" class="btn-action">Annuler</label>
                         </div>
                     </form>
                 </div>
             </div>
 
              <input type="checkbox" id="exportExcelModal" class="modal-toggle">
             <div class="export-modal">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h2>Exporter les données</h2>
                     </div>
                 </div>
             </div> 

        <div class="content">
            <!-- import modal-->
            <input type="checkbox" id="importExcelModal" class="modal-toggle">
            <div class="import-modal"> 
                <div class="modal-content">
                    <div class="import-header">
                        <h2>Importer un fichier Excel</h2>
                    </div>
                    <form class="import-form" action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="excelFile">Sélectionnez un fichier Excel :</label>
                            <input type="file" id="excelFile" name="excelFile" accept=".xlsx, .xls" required>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn-action">Importer</button>
                            <label for="importExcelModal" class="btn-action">Annuler</label>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal d'exportation -->
            <input type="checkbox" id="exportExcelModal" class="modal-toggle">
            <div class="export-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Exporter les données</h2>
                    </div>

                    <form class="export-form" action="#" method="post">
                        <div class="form-group">
                            <label for="exportFormat">Choisissez le format de fichier :</label>
                            <select id="exportFormat" name="exportFormat" required>
                                <option value="excel">Excel (.xlsx)</option>
                                <option value="pdf">PDF (.pdf)</option>
                                <option value="csv">CSV (.csv)</option>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn-action">Exporter</button>
                            <label for="exportDataModal" class="btn-action">Annuler</label>
                        </div>
                    </form>
                </div>
            </div>
                <!-- ajoute cotisation modal -->
            <input type="checkbox" id="ajouteutilisateur" class="modal-toggle">
            <div class="addC-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Exporter les données</h2>
                    </div>

                    <form id="add-company-form">
                        <div class="form-group">
                            <label for="company-name">NOM UTILISATEUR</label>
                            <input type="text" id="username" name="username" value="" placeholder="nom d'utilisateur" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Nom</label>
                            <input type="text" id="fistname" name="fistname" value="" placeholder="Nom" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Prenom</label>
                            <input type="text" id="lastname" name="lastname" value="" placeholder="Prenom" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email</label>
                            <input type="email" id="email" name="email" value="" placeholder="Email de entreprise" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-phone">Téléphone</label>
                            <div class="flex">
                                <span id="contact-phone" class="bg-gray-200 p-2 border border-gray-300 rounded-l-md">+225</span>
                                <input type="number" id="contact-phone" name="contact-phone" value="" placeholder="Numéro de téléphone" required oninput="validatePhoneNumber(this)"maxlength="15">
                            </div>
                        </div>
                        <!--div class="form-group">    
                            <label for="creation-date">Periode de déclaration</label>
                            <input type="date" id="per-decl" value="" name="per-decl" required pattern="\d{2}/\d{2}/\d{2}" >
                        </div-->
                        <!--div class="form-group">    
                            <label for="numtrans">Numéro de transaction</label>
                            <input type="number" id="numtrans" value="" name="numtrans" placeholder="Numéro de transaction" required>
                        </div>
                        <div class="form-group">    
                            <label for="montant">Montant</label>
                            <input type="number" id="montant" value="" name="montant" placeholder="Montant" required>
                        </div>*/
                        <div class="form-buttons">
                            <button type="submit" class="btn-save">Enregistrer</button>
                            <button type="reset" class="btn-reset">Réinitialiser le formulaire</button>
                        </div-->
                    </form>


                    <input type="checkbox" id="exportuneCotisation" class="modal-toggle">
                    <div class="exportcotisation-modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Exporter un utilisateur</h2>
                            </div>

                            <form class="export-form" action="#" method="post">
                                <div class="form-group">
                                    <label for="exportFormat">Choisissez le format de fichier :</label>
                                    <select id="exportFormat" name="exportFormat" required>
                                        <option value="excel">Excel (.xlsx)</option>
                                        <option value="pdf">PDF (.pdf)</option>
                                        <option value="csv">CSV (.csv)</option>
                                    </select>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn-action">Exporter</button>
                                    <label for="exportDataModal" class="btn-action">Annuler</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    





                    <div class="modal-actions">
                        <label for="ajouteCotisation" class="btn-action">Fermer</label>
                        <!-- <label for="detailsModal" class="btn-action">Modifier</label> -->
                    </div>
                </div>
            </div>



             
            <table class="company-table">
                <thead>
                    <tr>
                        <th>Nom d'utilisateur</th>
                        <th>Noms</th>
                        <th>Prenoms</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Role</th>
                        <th> </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>adminA</td>
                        <td>john</td>
                        <td>Doe</td>
                        <td>jm@gmail.com</td>
                        <td>00225 0707070706</td>
                        <td>Administrateur</td>
                        <td></td>
                        
                        
                        <td>
                            <label for="detailsModal" class="btn-action"><i class="fa-regular fa-eye"></i></label>
                            <label for="editModal" class="btn-action"><i class="fa-regular fa-pen-to-square"></i></label>
                            <button class="btn-action btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- Plus d'utilisateurs -->
                </tbody>

                <!-- Modal pour mofifier les détails de l'utilisateur -->

                <input type="checkbox" id="editModal" class="modal-toggle">
                <div class="edit-modal">
                    <div class="modal-content">
                        <h2>Modifier le profil</h2>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="edit-name">Nom d'utilisateur</label>
                                <input type="text" id="" name="name" value="115" required>
                            </div>
                            <div class="form-group">
                                <label for="edit-contact">Nom</label>
                                <input type="text" id="" name="contact" value="John" required>
                            </div>
                            <div class="form-group">
                                <label for="edit-contact">Prenom</label>
                                <input type="text" id="" name="contact" value="Doe" required>
                            </div>
                            <div class="form-group">
                                <label for="edit-location">Email</label>
                                <input type="text" id="" name="location" value="jm@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="edit-description">Tel</label>
                                <input type="number" id="" name="location" value="4452455588" required>
                            </div>

                            <div class="form-group">
                                <label for="edit-datecreate">Role</label>
                                <input type="text" id="" name="" value="level" required>
                            </div>
                            <!--div class="form-group">
                                <label for="edit-lastupd">Periode de déclaration</label>
                                <input type="date" id="" name="" value="24-12-2024" required>
                            </div>
                            <div class="form-group">
                                <label for="edit-numtrans">Numero de transaction</label>
                                <input type="number" id="" name="" value="120" required>
                            </div>
                            <div class="form-group">
                                <label for="edit-cotisation">Date début de transaction </label>
                                <input type="number" id="" name="" value="120" required>
                            </div>
                            <div class="form-group">
                                <label for="edit-montant">Montant</label>
                                <input type="number" id="edit-montant" name="" value="120" required>
                            </div-->
                            
                            <div class="modal-actions">
                                <button type="submit" class="btn-action">Enregistrer</button>
                                <label for="editModal" class="btn-action btn-cancel">Annuler</label>
                            </div>
                        </form>
                    </div>
                </div>
                
                
                <!-- Modal pour afficher les détails de la cotisation par entreprise -->
                <input type="checkbox" id="detailsModal" class="modal-toggle">
                <div class="details-modal">
                    <div class="modal-content">
                        <div class="details-header">
                            <div class="details-logo">
                                <img src="logo-example.png" alt="Logo de l'entreprise">
                            </div>
                        </div>  
                        <h2>Détails utilisateur </h2>
                        <p><strong>Nom utilisateur :</strong>115</p>
                        <p><strong>Nom :</strong>John</p>
                        <p><strong>Prenom :</strong>Doe</p>
                        <p><strong>Email :</strong> jm@gmail.com</p>
                        <p><strong>Tel :</strong>4452455588</p>
                        <p><strong>role :</strong>Administrateur</p>

                        
                        <div class="details-section">
                            <h3><strong>Historique / Notes</strong></h3>
                            <ul>
                                <li>Periode de d'enregistrement : 01/01/2020</li>
                                <li>Dernière modification : 20/12/2024</li>
                            </ul>
                        </div>
                        

                        <!--div class="details-section">
                            <h3><strong>Transaction</strong></h3>
                            <div class="stats">
                                <div class="stat-item">
                                    <h4>Numero de transaction</h4>
                                    <p>120</p>
                                </div>
                                <div class="stat-item">
                                    <h4>Date début de transaction </h4>
                                    <p>01/01/2020</p>
                                </div>
                                <div class="stat-item">
                                    <h4>Montant</h4>
                                    <p>2025 XOF</p>
                                </div>
                            </div-->
                            <div class="modal-actions">
                                <label for="detailsModal" class="btn-action">Fermer</label>
                                 <label for="exportuneCotisation" class="btn-action"><i class="fa-solid fa-file-export"></i></label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                


            </table>
            
             
                <div class="pagination">
                    <button class="btn-page">Précédent</button>
                    <button class="btn-page">1</button>
                    <button class="btn-page">2</button>
                    <button class="btn-page">Suivant</button>
                </div>
        </div>
        
    </main>
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
    
</body>




</html>


<script>
    const inputMontant = document.getElementById('edit-montant');

    // Empêcher les caractères non numériques au moment de la saisie
    inputMontant.addEventListener('input', function () {
        // Remplace tout ce qui n'est pas un nombre valide
        this.value = this.value.replace(/[^0-9.]/g, '');
    });
</script>

