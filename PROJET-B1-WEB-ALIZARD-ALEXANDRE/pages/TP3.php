<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>B1 Programmation Web - TP3</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="shortcut icon" type="image/png" href="../../img/favicon.png"/>
    </head>
    <body>
    <header>
        <?
        include("../header.php");
        ?>
    </header>
        <h1>SQL</h1>
<h2>1. Le langage SQL</h2>
<h3>1.1. Définition</h3>
Le langage <b>SQL</b> (<b>S</b>tructured <b>Q</b>uery <b>L</b>anguage ou Langage de requêtes structuré) est un langage comprenant à lui seul l’ensemble
des ordres nécessaires à la création et à la gestion d’une base de données relationnelle. Il a été créé en 1986 et est en fait
l’aboutissement de plusieurs langages (Sequel en 1977, System/R, ...) créés depuis l’apparition du modèle relationnel en 1970
(le modèle relationnel a été inventé par Mr Codd, un mathématicien de chez IBM). L'utilisation du langage SQL suppose
obligatoirement que les données aient été définies selon le modèle relationnel au sein d'un SGBDR (Oracle ©, SQLServer, mySQL,
PostgreSQL...).
<h3>1.2. Les différentes normes utilisées</h3>
Il existe aujourd'hui plusieurs normes relatives à l'utilisation du <b><u>langage SQL</u></b>. La différence entre ces deux normes se situe
principalement dans l'écriture des jointures et dans l'ajout de fonctionnalités. :
<ol>
    - La norme <b>SQL 89</b> qui est encore très utilisée actuellement.<br>
    - La norme <b>SQL 92.</b><br>
    - Aujourd'hui <b>SQL 2011.</b><br>
</ol>
Bien qu'il existe des normes il peut y avoir des différences entre SGBDR dans la syntaxe. Ainsi on peut lire sur le site de PostgreSQL:
<ul><i>
    <li>"Le développement de <big>PostgreSQL</big><sup>TM</sup> respecte le standard en vigueur, tant que celui-ci ne s'oppose pas aux fonctionnalités
    traditionnelles ou au bon sens..."</li>
    <li>"SQL-92 définit trois niveaux de conformité : basique (ENTRY), intermédiaire (INTERMEDIATE) et complète (FULL). La majorité des
    systèmes de gestion de bases de données se prétendaient compatibles au standard SQL dès lors qu'ils se conformaient au niveau
    Entry"</li>
</i></ul>
<h2>2. Le modèle de données utilisé dans le cours</h2>
<h3>2.1. Le modèle entité-association (ou MCD) d'un établissement hospitalier</h3>
<h3>2.2. Le modèle relationnel (ou MRD) d'un établissement hospitalier</h3>
<h3>2.3. La description textuelle des tables utilisées</h3>
fonction_personnel (code_fonction, libelle_fonction)
Clé primaire : code_fonction
service (num_service, libelle_service, capacite_accueil, date_ouverture)
Clé primaire : num_service
    <footer>
        <?
        include("../footer.php");
        ?>
    </footer>
    </body>
    <style>
        body{
            margin: 25px;
        }
    </style>
</html>
