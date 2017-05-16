<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie9/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie9/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie9/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie9/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie9/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie9/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie9/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie9/exercice8/">Exercice 8</a></li>
                <li><a href="http://partie9/TP/">TP</a></li>
            </ul>
        </nav>
        <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)<br/>
            Bonus : Le faire en français.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Affichage de la date:
            <?php
            // Utilisation de la fonction setlocale pour définir la localisation précisément pour le temps ici avec LC_TIME. Ajout de .UTF8 spécifique à Ubuntu/Debian
            setlocale(LC_TIME, 'fr_FR.UTF8');
            // strftime — Formate une date/heure locale avec la configuration locale
            echo strftime('%A %e %B %Y');
            ?>
        </p>
    </body>
</html>