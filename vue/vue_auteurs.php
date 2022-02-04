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
require_once './model/auteur.php';

require_once './manager/manager_auteurs.php';
$manager_auteur = new Manager_auteur();
$manager_auteur -> recuperation_auteurs();

?> 

  <!-- article par auteurs-->
  <div class="container">

<?php

//récupération des tableaux d'auteur, que l'on va mettre dans une variable pour que ce soit plus lisible:
$auteurs = $manager_auteur->get_auteurs();

//$tab_auteurs est un attribut 'static', donc on peut y accéder directement avec le nom de la class
for ($i=0; $i < count($auteurs); $i++) :
    ?>
    <article>
        <!-- INSERER LES REQUETES SQL POUR L'EDITION  ==  on veut que l'article soit répété à chaque fois qu'il y a une nouvel auteur-->

        <!-- [$i] pour récupérer un aueur, puis on lui applique la fonction que l'on veut lui attribuer -->
        <img src="./Images/<?= $auteurs[$i]->getImage_auteur(); ?>" alt="image_auteur">
        <h2> <?= $auteurs[$i]->getNom_auteur(); ?> </h2>
        <p> <?= $auteurs[$i]->getOeuvres_auteur(); ?> </p>
    </article>
<?php endfor ?>         
    </div>
</body>

</html>