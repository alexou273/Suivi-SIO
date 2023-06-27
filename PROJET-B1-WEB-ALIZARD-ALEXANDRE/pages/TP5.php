<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>B1 Programmation Web - TP5</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="shortcut icon" type="image/png" href="../../img/favicon.png"/>
    </head>
    <body>
    <header>
        <?
        include("../header.php");
        ?>
    </header>
<h1>Exercice 1</h1>
<div>Calendrier scolaire 2022-2023</div>
<table border = '1'>
    <tr>
        <td> Vacances </td> <td> Zone A </td> <td> Zone B </td> <td> Zone C </td>
    </tr>
    <tr>
        <td>  </td> <td> Besançon, Bordeaux,<br> Clermont-Ferrand,<br> Dijon, Grenoble,<br> Limoges, Lyon, Poitiers. </td>
        <td> Aix-Marseille, Amiens,<br> Lille, Nancy-Metz, Nantes,<br> Nice, Normandie,<br> Orléans-Tours, Reims,<br> Rennes, Strasbourg. </td>
        <td> Créteil, Montpellier,<br> Paris, Toulouse,<br> Versailles. </td>
    </tr>
    <tr>
        <td> Prérentrée des enseignants </td>
        <td colspan="3"> Mercredi 31 août 2022 </td>
    </tr>
    <tr>
        <td> Rentrée scolaire des élèves </td>
        <td colspan="3"> Reprise des cours : jeudi 1er septembre 2022 </td>
    </tr>
    <tr>
        <td> Vacances de la Toussaint </td>
        <td colspan="3"> Fin des cours : samedi 22 octobre 2022<br> Reprise des cours : lundi 7 novembre 2022 </td>
    </tr>
    <tr>
        <td> Vacances de Noël </td>
        <td colspan="3"> Fin des cours : samedi 17 décembre 2022<br> Reprise des cours : mardi 3 javnier 2023 </td>
    </tr>
    <tr>
        <td> Vacances d'Hiver </td>
        <td> Fin des cours : samedi 4 fevrier 2023<br> Reprise des cours : lundi 20 fevrier 2023 </td>
        <td> Fin des cours : samedi 11 fevrier 2023<br> Reprise des cours : lundi 27 fevrier 2023 </td>
        <td> Fin des cours : samedi 18 fevrier 2023<br> Reprise des cours : lundi 6 mars 2023 </td>
    </tr>
    <tr>
        <td> Vacances de printemps </td>
        <td> Fin des cours : samedi 8 avril 2023<br> Reprise des cours : lundi 24 avril 2023 </td>
        <td> Fin des cours : samedi 15 avril 2023<br> Reprise des cours : lundi 2 mai 2023 </td>
        <td> Fin des cours : samedi 22 avril 2023<br> Reprise des cours : lundi 9 mai 2023 </td>
    </tr>
    <tr>
        <td> Vacances d'été </td>
        <td colspan="3"> Fin des cours : samedi 8 juillet 2023</td>
    </tr>
</table>

<h1>Exercice 2</h1>
<table border = '1'>
    <tr>
        <td> Logo </td> <td> Nom abrégé </td> <td> Nom complet </td> <td> Année de sortie </td> <td> Site web de référence </td> <td> Exemple de code </td>
    </tr>
    <tr>
        <td> <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" width="128px" height="69px"/></a> </td>
        <td> PHP </td>
        <td> Hypertext Preprocessor </td>
        <td> 1994 </td>
        <td> <a href="https://www.php.net/" target="_blank">php.net</a> </td>
        <td>  </td>
    </tr>
    <tr>
        <td> <a href="https://fortimelp.fr/wp-content/uploads/2019/08/Jakarta_ee_mini.png" target="_blank"><img src="https://fortimelp.fr/wp-content/uploads/2019/08/Jakarta_ee_mini.png" width="69px" height="69px"/></a> </td>
        <td> JSP </td>
        <td> Jakarta Server Pages </td>
        <td>  </td>
        <td> <a href="https://jakarta.ee/">jakarta.ee</a> </td>
        <td>  </td>
    </tr>
    <tr>
        <td> <a href="https://www.shashidharkumar.com/wp-content/uploads/2007/11/ASP.png" target="_blank"><img src="https://www.shashidharkumar.com/wp-content/uploads/2007/11/ASP.png" width="69px" height="69px"/></a> </td>
        <td> ASP </td>
        <td> Active Server Pages </td>
        <td> 1996 </td>
        <td>  </td>
        <td>  </td>
    </tr>
    <tr>
        <td> <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Ruby_logo.svg/1024px-Ruby_logo.svg.png" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Ruby_logo.svg/1024px-Ruby_logo.svg.png" width="69px" height="69px"/></a> </td>
        <td colspan="2"> Ruby </td>
        <td> 1995 </td>
        <td> <a href="https://www.ruby-lang.org/fr/">ruby-lang.org</a> </td>
        <td>  </td>
    </tr>
    <tr>
        <td> <a href="https://picandocodigo.net/wp-content/uploads/2009/03/perl-camel.png" target="_blank"><img src="https://picandocodigo.net/wp-content/uploads/2009/03/perl-camel.png" width="69px" height="69px"/></a> </td>
        <td> Perl </td>
        <td> Practical Extraction and Report Language </td>
        <td> 1987 </td>
        <td> <a href="https://www.perl.org/">perl.org</a> </td>
        <td>  </td>
    </tr>
    <tr>
        <td> <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1869px-Python-logo-notext.svg.png" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1869px-Python-logo-notext.svg.png" width="69px" height="69px"/></a> </td>
        <td colspan="2"> Python </td>
        <td> 1991 </td>
        <td> <a href="https://www.python.org/" target="_blank">python.org</a> </td>
        <td> <code> a = "Hello World"<br>print(a) </code> </td>
    </tr>
</table>
            <footer>
            <?
            include("../footer.php");
            ?>
            </footer>
    </body>
</html>
