<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/accueil.css">

     <title>Manga4All</title>
</head>

<?php
include_once './header/header_accueil.php';
?>
<body>
    <!--barre de recherche-->
    <section class="barre_recherche">
        <input type="search" id="barre_recherche" name="barre_recherche" placeholder="Rechercher">
        <button><img src="./Images/loupe.png" alt="loupe" ></button>
        <!--on click, go to the research results-->
    </section>

  
    <!--conteneur-->
    <article id="texte_accueil">
        <img id="banniere" src="./Images/banniere.jpg" alt="banniere">
        <p id="message_accueil">
            Bienvenue sur le site de Manga4All, un lieu pour découvrir, rechercher, collectionner!
            <br>
            A votre tour de trouver le bonheur!
        </p><br>
    </article>
    <p>
        Dernières nouveautés ajoutées:
    </p>
    <section>
            <ul id="news">
                <li><img src="./Images/akira_toriyama_dragon_ball.png"> </li>
                <li><img src="./Images/akira_toriyama_dragon_ball.png"> </li>
                <li><img src="./Images/akira_toriyama_dragon_ball.png"> </li>
                <li><img src="./Images/akira_toriyama_dragon_ball.png"> </li>
                <li><img src="./Images/akira_toriyama_dragon_ball.png"> </li>
                <li><img src="./Images/akira_toriyama_dragon_ball.png"> </li>
            </ul>
        
    </section>
</body>

</html>