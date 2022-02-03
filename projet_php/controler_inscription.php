<?php

    //connexion à la BDD
    include './config/connectBdd.php';
    
    // ajout de la page de classe:
    include './model/utilisateur.php';    
    
    //ajout de la vue:
    include './vue/vue_inscription.php';
    
    //test existence des champs 
    if (isset($_POST['util_pseudo']) && isset($_POST['util_email']) && isset($_POST['util_mdp'])){ 
        //test de vérification si les champs sont vides
        if($_POST['util_pseudo'] == '' || $_POST['util_email'] == '' || $_POST['util_mdp'] == ''){
            echo "<p>Veuillez remplir les champs du formulaire correctement</p>";
        }
        //création de l'utilisateur si les champs sont remplis 
        else {
        $user = new Utilisateur();
        
        $user->setUtil_pseudo($_POST['util_pseudo']);
        $user->setUtil_email($_POST['util_email']);
        $user->setUtil_mdp($_POST['util_mdp']);
       

        $user->createUser(); 
        header('Location: ./controler_inscription.php');
        }
           
    }

    else{
      
        echo '<p>Veuillez remplir les champs de formulaire.</p>';
    }
?>
