<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documents</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="/resources/css/document.css">
</head>
<body>
     <a href="login.html">
         <button class="signout">
             <i class="fas fa-sign-out-alt"></i> Déconnexion
         </button>
     </a>
     
 </div>
  <!-- Main content -->
  <div class="content">
    <div class="submenu">
      <h2>Télécharger/Voir des fichiers</h2>
      <div class="file-form">
        <h3>Télécharger un fichier</h3>
        <form id="uploadForm">
          <input type="file" id="fileInput" name="file" required>
          <select name="fileType" required>
            <option value="payslip">Bulletin de salaire</option>
            <option value="contract">Contrat</option>
            <option value="report">Rapport</option>
          </select>
          <button type="submit">Télécharger</button>
        </form>
      </div>
      <div class="file-list">
        <h3>Fichiers téléchargés</h3>
        <table>
          <thead>
            <tr>
              <th>Nom du fichier</th>
              <th>Type</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="fileTableBody">
            <!-- Les fichiers téléchargés seront ajoutés ici dynamiquement -->
          </tbody>
        </table>
      </div>
    </div>
  
    <!-- Assigner des fichiers aux employés/abonnements -->

<div class="submenu">
  <div class="file-form">
    <h3>Assigner un fichier</h3>
    <form id="assignForm">
      <select name="employee" id="employeeSelect" required>
        <!-- Les employés seront ajoutés ici dynamiquement -->
      </select>
      <select name="file" id="fileSelect" required>
        <!-- Les fichiers seront ajoutés ici dynamiquement -->
      </select>
      <button type="submit">Assigner</button>
    </form>
  </div>
</div>
  
    <!-- Filtrer les fichiers par type -->
    <div class="submenu">
      <h2>Filtrer les fichiers par type</h2>
      <div class="file-filter">
        <button onclick="filterFiles('payslip')">Bulletins de salaire</button>
        <button onclick="filterFiles('contract')">Contrats</button>
        <button onclick="filterFiles('report')">Rapports</button>
      </div>
    </div>
  </div>

  <script>
    // Simuler une liste d'employés
const employees = [
  { id: 'employee1', name: 'Employé 1' },
  { id: 'employee2', name: 'Employé 2' },
  { id: 'employee3', name: 'Employé 3' }
];

// Simuler une liste de fichiers téléchargés
const uploadedFiles = [
  { id: 'file1', name: 'Fichier 1' },
  { id: 'file2', name: 'Fichier 2' },
  { id: 'file3', name: 'Fichier 3' }
];

// Fonction pour remplir le sélecteur d'employés
function populateEmployeeSelect() {
  const employeeSelect = document.getElementById('employeeSelect');
  employees.forEach(employee => {
    const option = document.createElement('option');
    option.value = employee.id;
    option.textContent = employee.name;
    employeeSelect.appendChild(option);
  });
}

// Fonction pour remplir le sélecteur de fichiers
function populateFileSelect() {
  const fileSelect = document.getElementById('fileSelect');
  uploadedFiles.forEach(file => {
    const option = document.createElement('option');
    option.value = file.id;
    option.textContent = file.name;
    fileSelect.appendChild(option);
  });
}

// Appeler les fonctions pour remplir les sélecteurs lors du chargement de la page
window.onload = function() {
  populateEmployeeSelect();
  populateFileSelect();
};
  
// Script pour gérer le téléversement et l'affichage des fichiers
document.getElementById('uploadForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Empêche le rechargement de la page
  const fileInput = document.getElementById('fileInput');
  const fileType = document.querySelector('select[name="fileType"]').value;

  // Ajouter le fichier à la liste
  const fileTableBody = document.getElementById('fileTableBody');
  const row = document.createElement('tr');
  row.innerHTML = `
    <td>${fileInput.files[0].name}</td>
    <td>${fileType}</td>
    <td>
      <button onclick="viewFile()">View</button>
      <button onclick="deleteFile(this)">Delete</button>
    </td>
  `;
  fileTableBody.appendChild(row);

  // Réinitialiser le champ de fichier
  fileInput.value = '';
});

// Fonction pour visualiser le fichier
function viewFile() {
  alert('Viewing file...');
}

// Fonction pour supprimer un fichier de la liste
function deleteFile(button) {
  const row = button.parentNode.parentNode; // Récupérer la ligne du bouton
  row.parentNode.removeChild(row); // Supprimer la ligne
}
  
      // Filtrage des fichiers par type
      function filterFiles(type) {
        alert('Filtering files by type: ' + type);
      }
  
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