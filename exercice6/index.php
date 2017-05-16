<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 6</title>
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
        <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Affichage du nombre de jour dans le mois de février de l'année 2016:
            <?php
            // cal_days_in_month — Retourne le nombre de jours dans un mois, pour une année et un calendrier donné
            echo cal_days_in_month(CAL_GREGORIAN, 2, 2016);
            ?>
        </p>
    </body>
</html>