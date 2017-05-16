<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 2</title>
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
        <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Affichage de la date:
            <?php
            // Utilisation de la fonction date qui formate une date locale
            echo date('d-m-y');
            ?>
        </p>
    </body>
</html>