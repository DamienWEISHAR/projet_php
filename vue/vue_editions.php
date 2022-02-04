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
require_once './model/edition.php';

require_once './manager/manager_editions.php';
$manager_edition = new Manager_edition();          
$manager_edition -> recuperation_editions();

?> 

  <!--article par édition-->
  <div class="container">

    <?php 

    //récupération des tableaux d'édition, que l'on va mettre dans une variable pour que ce soit plus lisible:
    $editions = $manager_edition->get_editions();

    //$tab_editions est un attribut 'static', donc on peut y accéder directement avec le nom de la class
    for ($i=0; $i < count($editions); $i++) : 
    ?>
        <article>
            <!-- INSERER LES REQUETES SQL POUR L'EDITION  ==  on veut que l'article soit répété à chaque fois qu'il y a une nouvelle édition-->

            <!-- [$i] pour récupérer une edition, puis on lui applique la fonction que l'on veut lui attribuer -->
            <img src="./Images/<?= $editions[$i]->getImage_edition(); ?>" alt="image_edition">
            <h2> <?= $editions[$i]->getNom_edition(); ?> </h2>
            <p> <?= $editions[$i]->getPresentation_edition(); ?> </p>
        </article>
    <?php endfor ?>  
    </div>
</body>

</html>