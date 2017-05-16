<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 7</title>
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
        <p>Afficher la date du jour + 20 jours.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Affichage de la date du jour plus 20 jours:
            <?php
            // utilisation de date pour afficher la date à laquelle on ajoute 20 jours par strtotime
            $beginDate = '2017-05-12';
            echo date('Y-m-d', strtotime($beginDate . ' +20 days'));
            ?>
        </p>
    </body>
</html>