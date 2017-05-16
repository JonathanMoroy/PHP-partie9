<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 5</title>
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
        <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Affichage de la différence de jours entre le 16 Mai 2016 et aujourd'hui:
            <?php
            // Je soustrait la timestamp du moment actuel avec celui du 16 mai 2016 et déclare le résultat dans une variable
            $difference = time() - mktime(0, 0, 0, 5, 16, 2016);
            // Je transforme le timestamp en jour et le transforme en entier avec intval
            echo intval(($difference / 3600) / 24);
            ?>
        </p>
    </body>
</html>