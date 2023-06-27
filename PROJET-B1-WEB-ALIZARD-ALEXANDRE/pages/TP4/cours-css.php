<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cours CSS</title>
        <link rel="stylesheet" href="../../css/main.css">
    </head>
<body>
        <header>
        <?php
            include("../../header.php")
        ?>
        </header>
        <div class="embed-container">
            <embed src="../../doc/Cours_CSS_3_P1.pdf">
            <embed src="../../doc/Cours_CSS_3_P2.pdf">
        </div>
        <footer>
        <?php
        include("../../footer.php")
        ?>
        </footer>
</body>
    <style>
        /* Styling pour le header */
header {
  padding: 20px;
}

/* Styling pour le footer */
footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}

/* Styling pour les embeds */
.embed-container {
  position: absolute;
  top: 135px; /* Ajustez la valeur selon la hauteur de votre header */
  left: 0;
  right: 0;
  bottom: 100px; /* Ajustez la valeur selon la hauteur de votre footer */
  display: flex;
  justify-content: center;
  align-items: center;
}

embed {
  max-width: 50%;
  height: 450px; /* Ajustez la hauteur selon vos préférences */
  width: 500px;
  margin: 10px;
  border-radius: 5px;
}

    </style>

</html>