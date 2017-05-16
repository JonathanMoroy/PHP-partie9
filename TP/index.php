<?php
// Déclaration de mes variables recueillant les deux variables superglobales si elles sont définies
if (isset($_POST['months']) && isset($_POST['years'])) {
    $yearPost = $_POST['years'];
    $monthPost = $_POST['months'];
} else {
    $yearPost = 1990;
    $monthPost = 'Juillet';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>TP - Calendrier</title>
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
        <!-- Mise en place d'un formulaire pour récupérer le choix de l'user en POST -->
        <form action="index.php" method="POST">
            <label for="months">Mois: <select id="months" name="months">
                    <?php
                    // Déclaration des mois dans un tableau pour les développer dans un option select via un foreach
                    $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                    foreach ($months as $month) {
                        // L'option est selected si elle correspond avec le choix de l'user
                        ?>
                        <option value="<?php echo $month; ?>" <?php if ($month == $monthPost) { ?>selected<?php } ?>><?php echo $month; ?></option>
                        <?php
                    }
                    ?>
                </select></label>
            <label for="years">Années: <select id="years" name="years">
                    <?php
                    // Utilisation d'une boucle for pour génerer les options du menu déroulant années
                    for ($i = 1900; $i <= 2030; $i ++) {
                        // L'option est selected si elle correspond avec le choix de l'user
                        ?>
                        <option value="<?php echo $i; ?>" <?php if ($i == $yearPost) { ?>selected<?php } ?>><?php echo $i ?></option>
                        <?php
                    }
                    ?>
                </select></label>
            <input type="submit" value="Valider" />
        </form>
        <?php
        // Récupere une valeur utilisable dans les fonctions dates de PHP pour le mois selectionné
        $numberMonth = '';
        switch ($monthPost) {
            case 'Janvier' : $numberMonth = '01';
                break;
            case 'Février' : $numberMonth = '02';
                break;
            case 'Mars' : $numberMonth = '03';
                break;
            case 'Avril' : $numberMonth = '04';
                break;
            case 'Mai' : $numberMonth = '05';
                break;
            case 'Juin' : $numberMonth = '06';
                break;
            case 'Juillet' : $numberMonth = '07';
                break;
            case 'Août' : $numberMonth = '08';
                break;
            case 'Septembre' : $numberMonth = '09';
                break;
            case 'Octobre' : $numberMonth = '10';
                break;
            case 'Novembre' : $numberMonth = '11';
                break;
            case 'Décembre' : $numberMonth = '12';
                break;
            default : '01';
                break;
        }
        // Déclaration du format de date local. Récupération du nombre de jours selon le mois et l'année ainsi que du jour de la semaine du 1er de cette date.
        setlocale(LC_TIME, 'fr_FR.UTF8');
        $numberDay = cal_days_in_month(CAL_GREGORIAN, $numberMonth, intval($yearPost));
        $dayName = intval(strftime('%u', strtotime($numberMonth . '/1/' . $yearPost)));
        ?>
        <!-- Début du tableau représentant le calendrier -->
        <table id="calendar">
            <caption>
                <?php
                // Affichage du mois et de l'année avec vérification faille XSS
                echo strip_tags(trim($monthPost));
                ?> <?php
                echo strip_tags(trim($yearPost));
                ?>
            </caption>
            <thead>
                <tr>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    // Première boucle déterminant le jour de départ en colorisant les jours du mois précédent
                    for ($i = 1; $i < $dayName; $i ++) {
                        ?>
                        <td class="empty"></td>
                        <?php
                    }
                    ?>
                    <?php
                    // Deuxième boucle déployant tout les jours du mois en mettant en place une nouvelle ligne à chaque multiple de 7
                    for ($i = 0; $i < $numberDay; $i ++) {
                        ?>
                        <td><?php echo ($i + 1); ?></td>
                        <?php
                        if (($i + $dayName) % 7 == 0) {
                            ?>
                        </tr><tr>
                            <?php
                        }
                    }
                    // Troisième boucle ajoutant les dernières cellules si manquante pour terminer la ligne de 7 jours colorisées
                    for ($i = 0; ($i + $dayName + $numberDay - 1) % 7 != 0; $i ++) {
                        ?>
                        <td class="empty"></td>
                        <?php
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>