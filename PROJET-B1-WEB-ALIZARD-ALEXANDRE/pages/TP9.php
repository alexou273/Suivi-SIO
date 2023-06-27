<!DOCTYPE html>
<html>
<head>
	<title>B1 Programmation Web - TP9</title>
    <link rel="stylesheet" href="../css/main.css">
	<link rel="shortcut icon" type="image/png" href="../../img/favicon.png"/>
</head>
<body>
    <header>
        <?
        include("../header.php");
        ?>
    </header>
	<h2>Formulaire d'Opération tranquillité vacances</h2>

	<?php if($_SERVER['REQUEST_METHOD'] == 'POST') : // Si le formulaire a été soumis ?>
		<h3>Récapitulatif des informations saisies :</h3>
		<ul>
			<li>Nom : <?php echo $_POST['nom']; ?></li>
			<li>Prénom : <?php echo $_POST['prenom']; ?></li>
			<li>Adresse : <?php echo $_POST['adresse']; ?></li>
			<li>Date de début : <?php echo $_POST['date_debut']; ?></li>
			<li>Date de fin : <?php echo $_POST['date_fin']; ?></li>
		</ul>
	<?php else : // Si le formulaire n'a pas été soumis ?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="form1">
			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom">
			<div id="erreurNom"></div>

			<label for="prenom">Prénom :</label>
			<input type="text" name="prenom" id="prenom">
			<div id="erreurPrenom"></div>

			<label for="adresse">Adresse :</label>
			<input type="text" name="adresse" id="adresse">
			<div id="erreurAdresse"></div>

			<label for="date_debut">Date de début :</label>
			<input type="date" name="date_debut" id="date_debut">
			<div id="erreurDD"></div>

			<label for="date_fin">Date de fin :</label>
			<input type="date" name="date_fin" id="date_fin">
			<div id="erreurDF"></div>

			<input type="submit" value="Valider">
		</form>
	<?php endif; ?>
	<?php if($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
  		<div class="success-message">Merci d'avoir rempli le formulaire !</div>
	<?php endif; ?>
	<script>

		document.getElementById("form1").onsubmit= function validateForm() {
		
		console.log("appel fonction OK");
		var nom = document.getElementById("nom").value;
		var prenom = document.getElementById("prenom").value;
		var adresse = document.getElementById("adresse").value;
		var date_debut = document.getElementById("date_debut").value;
		var date_fin = document.getElementById("date_fin").value;
		var Boolform = true;
		
        if (nom == "") {
			document.getElementById("erreurNom").innerHTML="Le champ Nom est obligatoire.\n";
			Boolform = false;
        } else {
			document.getElementById("erreurPrenom").innerHTML="";
		}
        if (prenom == "") {
			document.getElementById("erreurPrenom").innerHTML="Le champ Prénom est obligatoire.\n";
			Boolform = false;
        } else {
			document.getElementById("erreurPrenom").innerHTML="";
		}
		
        if (adresse == "") {
			document.getElementById("erreurAdresse").innerHTML="Le champ Adresse est obligatoire.\n";
			Boolform = false;
        } else {
			document.getElementById("erreurPrenom").innerHTML="";
		}
		
        if (date_debut == "") {
            document.getElementById("erreurDD").innerHTML="Le champ Date début est obligatoire.\n";
			Boolform = false;
		} else {
			document.getElementById("erreurDD").innerHTML="";
		}
		
        if (date_fin == "") {
            document.getElementById("erreurDF").innerHTML="Le champ Date fin est obligatoire.\n";
			Boolform = false;
		} else {
			document.getElementById("erreurDF").innerHTML="";
		}
		if (Boolform == false) {
			return false;
		} else {
			alert("Merci d'avoir rempli le formulaire !");
			return true;
		}
    };
</script>

    <footer>
        <?
        include("../footer.php");
        ?>
    </footer>
	<style>
		/* Styles pour le formulaire */
form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
h2{
	text-align: center;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="date"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

input[type="submit"] {
  display: block;
  width: 100%;
  padding: 20px;
  margin-top: 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0062cc;
}

/* Styles pour les messages d'erreur */
.error {
  color: #dc3545;
  font-size: 14px;
  margin-top: 5px;
}

.success-message {
  margin-top: 20px;
  padding: 10px;
  background-color: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
  border-radius: 5px;
  text-align: center;
  width: 30%;
  margin-left: 70vh;
}

</style>
</body>
</html>