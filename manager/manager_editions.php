<?php

require_once './config/connectBdd.php';

//on utilise la class Edition dans la class, donc on fait un require
require_once './model/edition.php';

class Manager_edition extends Connexion{


    /*------------------------------------------------------------
                                ATTRIBUTS
    -------------------------------------------------------------*/
        //on y met le tableau d'éditions
        private $tab_editions;

    
    /*------------------------------------------------------------
                                CONSTRUCTEUR
    -------------------------------------------------------------*/
        //Vide car on en a pas besoin
        // public function __construct(){ 
        // } 


    /*------------------------------------------------------------
                                GETTERS & SETTERS
    -------------------------------------------------------------*/
    
        //Get de $tab_editions pour récupérer les éditions
        public function get_editions(){
            return $this->tab_editions; //permet de retourner le tableau $tab_editions
        }
    /*------------------------------------------------------------
                           METHODES
    -------------------------------------------------------------*/
 
    public function ajout_edition($edition){
        $this->tab_editions[] = $edition;
    }

    //va récupérer les editions dans la bdd
    public function recuperation_editions(){

        //requête préparée, ORDER BY pour mettre en ordre
        $req = $this->getBdd()->prepare("SELECT * FROM editions");
        $req ->execute();
        //récupération des valeurs dans la vaiable $liste_editions sous forme de tableau associatif
        // PDO//FETCH_ASSOC permet d'éviter le doublon
        $liste_editions = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        //on veut parcourir le tableau $liste_editions pour en ressortir des objets $edition
        foreach($liste_editions as $edition){
            $e = new Edition($edition['id_edition'],$edition['nom_edition'],$edition['image_edition'],$edition['presentation_edition']);
            
            //on veut ajouter les éditions créées dans le tableau $tab_editions, grâce aux appels des ≠ fonctions et variables:
            $this->ajout_edition($e);
        }

    }



}


?>