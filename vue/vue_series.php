<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga4All</title>
</head>

<body>

<?php
require_once './header/header_s_a_e.php';
require_once './model/serie.php';

require_once './manager/manager_series.php';
$manager_series = new Manager_serie();
$manager_series -> recuperation_series();


?>   
    <!--article par série-->
    <div class="container">

    <?php 

    //récupération des tableaux de séries, que l'on va mettre dans une variable pour que ce soit plus lisible:
    $series = $manager_series->get_series();

    //$tab_seriess est un attribut 'static', donc on peut y accéder directement avec le nom de la class
    for ($i=0; $i < count($series); $i++) : 
    ?>
        <article>
            <!-- veut que l'article soit répété à chaque fois qu'il y a une nouvelle serie-->

            <!-- [$i] pour récupérer une serie, puis on lui applique la fonction que l'on veut lui attribuer -->
            <img src="./Images/<?= $series[$i]->getImage_serie(); ?>" alt="image_serie">
            <h2><?= $series[$i]->getNom_serie(); ?></h2>
            <p><?= $series[$i]->getResume_serie(); ?></p>
        </article>
    <?php endfor ?>
    </div>
</body>

</html>