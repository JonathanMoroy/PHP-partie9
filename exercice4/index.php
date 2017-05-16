<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 4</title>
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
        <p>Afficher le timestamp du jour.<br/>
           Afficher le timestamp du mardi 2 août 2016 à 15h00.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Affichage du timestamp du jour:
            <?php
            // time — Retourne le timestamp UNIX actuel
            echo time();
            ?>
            <br/>
            Affichage du timestamp du Mardi 2 Août 2016 à 15h00:
            <?php
            // mktime — Retourne le timestamp UNIX d'une date 
            echo mktime(15, 0, 0, 8, 2, 2016);
            ?>
        </p>
    </body>
</html>