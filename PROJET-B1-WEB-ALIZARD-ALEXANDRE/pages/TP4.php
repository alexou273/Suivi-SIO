<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil Bloc1-Prog</title>
    <link rel="stylesheet" href="../css/tp4.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" type="image/png" href="../../img/favicon.png"/>
  </head>
  <body>
    <?
        include("../header.php");
    ?>
    
    <header>
      <h1>Bloc1-Prog</h1>
    </header>
    <main>
      <div class="cont">
        <section>
          <h2>Cours CSS</h2>
          <img src="../img/CSS3.png" class="CSS">
          <p>CSS est un langage pour décrire l'apparence d'un site web en HTML. Il contrôle la mise en page, la typographie, les couleurs, etc. CSS permet de créer une expérience utilisateur attrayante. Ce cours couvre les concepts de base et les techniques avancées de CSS.</p>
          <a href="TP4/cours-css.php">En savoir plus</a>
        </section>
        <section>
          <h2>Cours HTML</h2>
          <img src="../img/HTML5.png" class="HTML">
          <p>HTML (Hypertext Markup Language) est le langage de base pour créer des pages web. Il utilise des tags pour structurer et organiser le contenu d'une page. HTML permet de définir des titres, des paragraphes, des listes, des imgs, des liens, etc. Ce cours enseigne les fondements de HTML et comment créer des pages web efficaces et bien structurées.</p>
          <a href="TP4/cours-html.php">En savoir plus</a>
        </section>
        <section>
          <h2>Cours JS</h2>
          <img src="../img/Javascript.png" class="JS">
          <p>JavaScript est un langage côté client pour ajouter interactivité à un site web. Il peut être utilisé pour valider des formulaires, modifier du contenu, animer. Ce cours enseigne les concepts de base, algorithmes et programmation orientée objet pour développer des applications web interactives.</p>
          <a href="TP4/cours-js.php">En savoir plus</a>
        </section>
      <p class="texte">Le bloc 1 de la formation BTS SIO (Services Informatiques aux Organisations) est consacré à la programmation. Ce cours vise à fournir aux étudiants les bases de la programmation pour leur permettre de développer des applications informatiques. Les sujets abordés peuvent inclure les algorithmes, la structure de données, les langages de programmation tels que le C# ou le Java, la programmation orientée objet, la gestion de données, les applications web et mobiles, et la mise en œuvre de la programmation pour résoudre des problèmes. Les étudiants seront également invités à développer leur capacité à travailler en équipe, à communiquer et à résoudre des problèmes de manière efficace.</p>
    </div>
    </main>
    <?php
      include("../footer.php");
    ?>
  </body>
</html>