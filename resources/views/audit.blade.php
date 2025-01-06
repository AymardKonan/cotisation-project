  <title>Audit</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="/resources/css/audit.css">
 

  <!-- Main content -->
  <div class="content">
    <!-- Section des journaux d'audit -->
    <div class="audit-logs">
     <center> <h2>JOURNAUX D'AUDIT</h2> </center>

      <!-- Recherche et Filtrage -->
      <div class="log-actions">
        <div>
          <!-- Filtrage par action -->
          <select id="filterSelect" onchange="filterLogs()">
            <option value="">Filtrer par Action</option>
            <option value="create">Création</option>
            <option value="update">Mise à Jour</option>
            <option value="delete">Suppression</option>
          </select>
          
          <!-- Filtrage par période -->
          <label for="startDate">Du : </label>
          <input type="date" id="startDate" onchange="filterByDate()">
          <label for="endDate">Au : </label>
          <input type="date" id="endDate" onchange="filterByDate()">
          
          <!-- Nombre de logs -->
          <label for="logCount">Filtrer par : </label>
          <select id="logCount" onchange="updateLogDisplay()">
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="all">Tous</option>
          </select>
        </div>
        <button onclick="exportLogs()">Exporter</button>
      </div>
      

      <!-- Tableau des journaux -->
      <table id="logsTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Utilisateur</th>
            <th>Action</th>
            <th>Date</th>
            <th>Détails</th>
          </tr>
        </thead>
        <tbody>
          <!-- Logs dynamiques seront ajoutés ici via JavaScript -->
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Création</td>
            <td>2024-12-27 10:00:00</td>
            <td>Ajout d'un nouvel employé</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>Suppression</td>
            <td>2024-12-27 11:00:00</td>
            <td>Suppression d'un employé</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> 
  <script>
    function filterByDate() {
  const startDate = document.getElementById("startDate").value;
  const endDate = document.getElementById("endDate").value;
  const table = document.getElementById("logsTable");
  const rows = table.getElementsByTagName("tr");

  for (let i = 1; i < rows.length; i++) {
    const dateCell = rows[i].getElementsByTagName("td")[3];
    if (dateCell) {
      const logDate = new Date(dateCell.textContent || dateCell.innerText);
      const isAfterStart = startDate ? logDate >= new Date(startDate) : true;
      const isBeforeEnd = endDate ? logDate <= new Date(endDate) : true;

      if (isAfterStart && isBeforeEnd) {
        rows[i].style.display = "";
      } else {
        rows[i].style.display = "none";
      }
    }
  }
}

function updateLogDisplay() {
  const logCount = document.getElementById("logCount").value;
  const table = document.getElementById("logsTable");
  const rows = table.getElementsByTagName("tr");

  let visibleCount = 0;
  for (let i = 1; i < rows.length; i++) {
    if (logCount === "all" || visibleCount < parseInt(logCount)) {
      rows[i].style.display = "";
      visibleCount++;
    } else {
      rows[i].style.display = "none";
    }
  }
}

     // Mettre à jour l'année actuelle dans le footer
     document.getElementById('current-year').textContent = new Date().getFullYear();

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

    
    // Fonction de recherche dans les logs
    function searchLogs() {
      const input = document.getElementById("searchInput");
      const filter = input.value.toLowerCase();
      const table = document.getElementById("logsTable");
      const rows = table.getElementsByTagName("tr");

      for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let match = false;

        for (let j = 0; j < cells.length; j++) {
          if (cells[j].innerText.toLowerCase().indexOf(filter) > -1) {
            match = true;
            break;
          }
        }

        if (match) {
          rows[i].style.display = "";
        } else {
          rows[i].style.display = "none";
        }
      }
    }

    function filterLogs() {
  const actionType = document.getElementById("filterSelect").value;
  const table = document.getElementById("logsTable");
  const rows = table.getElementsByTagName("tr");

  for (let i = 1; i < rows.length; i++) {
    const actionCell = rows[i].getElementsByTagName("td")[2];
    if (actionCell) {
      const actionText = actionCell.textContent || actionCell.innerText;
      if (actionType === "" || actionText.toLowerCase() === actionType.toLowerCase()) {
        rows[i].style.display = "";
      } else {
        rows[i].style.display = "none";
      }
    }
  }
}


    // Fonction pour exporter les logs (ici, un exemple simple)
    function exportLogs() {
      const table = document.getElementById("logsTable");
      const rows = table.getElementsByTagName("tr");
      let csvContent = "ID,Utilisateur,Action,Date,Détails\n";

      for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowContent = [];
        for (let j = 0; j < cells.length; j++) {
          rowContent.push(cells[j].innerText);
        }
        csvContent += rowContent.join(",") + "\n";
      }

      const blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
      const link = document.createElement("a");
      link.href = URL.createObjectURL(blob);
      link.download = "audit_logs.csv";
      link.click();
    }
  </script>
</body>
</html>
