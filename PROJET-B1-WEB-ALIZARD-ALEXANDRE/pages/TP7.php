<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>B1 Programmation Web - TP7</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="shortcut icon" type="image/png" href="../../img/favicon.png"/>
    </head>
    <body class="bg">
    <header>
        <?php
        include("../header.php")
        ?>
    </header>
<h1 class="h1">Exercice 1 - Page avec popup</h1>
    <style>
      /* Couleur de fond */
      .bg {
        background-color: rgb(194, 219, 255);
      }

      /* Style du popup */
      .popup {
        position: absolute;
        font-family: Arial;
        border-radius: 5px;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(0, 0, 0);
        padding: 10px;
        z-index: 1;
        display: none;
      }

      /* Style du texte surligné */
      .surligne {
        cursor: pointer;
        color: blue;
        font-weight: bold;
        text-decoration: underline;
      }

      /* Style des entêtes */
      .h1 {
        border-radius: 10px;
        border: 2px solid rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
        padding: 10px;
        font-family: Arial;
        text-align: center;
      }
      .h2 {
        padding: 10px;
        font-family: Arial;
        text-align: center;
      }

      /* Style des textes */
      .texte {
        font-size: 18px;
        font-family: Arial;
        text-align: justify;
      }
      .formulaire {
        border-radius: 10px;
        border: 2px solid rgb(0, 0, 0);
        background-color: rgb(209, 209, 209);
        font-size: 18px;
        padding: 20px;
        font-family: Arial;
        text-align: center;
      }
      .tableau {
        background-color: white;
        font-size: 18px;
        font-family: Arial;
        text-align: justify;
      }

      /* Style du minuteur */
      .countdown {
        color: rgb(0, 0, 0);
        font-family: 'MS Gothic';
        font-size: 72px;
        font-weight: 900;
        text-align: center;
      }
    </style>

<div class="texte">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas <a href="https://www.marmiton.org/recettes/recette_pot-au-feu-facile_44578.aspx" target="_blank"><span class="surligne" onmouseover="popup('Pot au feu');" onmouseout="fermerPopup();">pellentesque</span></a> lobortis diam sit amet eleifend. Proin suscipit convallis orci, eu faucibus velit ullamcorper ac. Nam <a href="https://www.marmiton.org/recettes/recette_roti-de-porc-a-la-moutarde-et-au-miel_17178.aspx" target="_blank"><span class="surligne" onmouseover="popup('Roti de porc');" onmouseout="fermerPopup();">scelerisque</span></a> justo id tortor congue, sit amet convallis nibh placerat. Donec <a href="https://www.marmiton.org/recettes/recette_cake-aux-olives_17638.aspx" target="_blank"><span class="surligne" onmouseover="popup('Cake aux olives');" onmouseout="fermerPopup();">ultricies</span></a> lacinia mauris at ullamcorper. Suspendisse auctor euismod blandit. Vestibulum ut urna vitae mauris bibendum auctor in vitae ipsum.</p>
</div>

    <!-- Popup -->
    <div id="popup" class="popup"></div>

    <script>
      function popup(mot) {
        // Récupérer le popup et le mot surligné correspondant
        var popup = document.getElementById("popup");
        var surligne = event.target;

        // Positionner le popup à côté du mot surligné
        var rect = surligne.getBoundingClientRect();
        popup.style.top = rect.bottom + "px";
        popup.style.left = rect.left + "px";

        // Afficher le popup avec la définition du mot
        popup.innerHTML = "<b>" + mot + " :</b> " + "Recette du " + mot ;
        popup.style.display = "block";
      }

      function fermerPopup() {
        // Cacher le popup lorsque la souris sort du mot surligné
        var popup = document.getElementById("popup");
        popup.style.display = "none";
      }
    </script>

<h1 class="h1">Exercice 2 - Formulaire de visite journée porte ouverte</h1>

<h2 class="h2">Formulaire de visite journée porte ouverte :</h2>
  <div class="formulaire">
    <form id="formulaire">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required><br>

      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" required><br>

      <label for="etude">Étude suivie :</label>
      <select id="etude" name="etude">
        <option value="Bac pro">Bac pro</option>
        <option value="STI">STI</option>
        <option value="STMG">STMG</option>
        <option value="Général">Général</option>
      </select><br>

      <button type="submit">Valider</button>
    </form>
  </div>

  <h2 class="h2">Liste des visiteurs :</h2>
    <center>
    <table id="visiteurs" class="tableau" border = '1'>
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Étude suivie</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    </center>

    <script>
      document.getElementById("formulaire").addEventListener("submit", function(event) {
        event.preventDefault(); // Empêcher l'envoi du formulaire

        // Récupérer les valeurs des champs
        var nom = document.getElementById("nom").value;
        var prenom = document.getElementById("prenom").value;
        var etude = document.getElementById("etude").value;

        // Ajouter une nouvelle ligne dans le tableau avec les valeurs des champs
        var table = document.getElementById("visiteurs").getElementsByTagName("tbody")[0];
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = nom;
        cell2.innerHTML = prenom;
        cell3.innerHTML = etude;

        // Réinitialiser les champs du formulaire
        document.getElementById("nom").value = "";
        document.getElementById("prenom").value = "";
        document.getElementById("etude").selectedIndex = 0;
      });
    </script>

<h1 class="h1">Exercice 3 - Compte à rebours</h1>

<div id="countdown" class="countdown"></div>
<script src="TP7/js/script.js"></script>

    </body>
    <footer>
      <?php
        include("../footer.php")
        ?>
    </footer>
</html>