<?php

require_once './config/connectBdd.php';

//on utilise la class Auteur dans la class, donc on fait un require
require_once './model/auteur.php';

class Manager_auteur extends Connexion{


    /*------------------------------------------------------------
                                ATTRIBUTS
    -------------------------------------------------------------*/
        //on y met le tableau d'auteurs
        private $tab_auteurs;

    
    /*------------------------------------------------------------
                                CONSTRUCTEUR
    -------------------------------------------------------------*/
        //Vide car on en a pas besoin
        // public function __construct(){ 
        // } 


    /*------------------------------------------------------------
                                GETTERS & SETTERS
    -------------------------------------------------------------*/
    
        //Get de $tab_auteurs pour récupérer les auteurs
        public function get_auteurs(){
            return $this->tab_auteurs; //permet de retourner le tableau $tab_auteurs
        }
    /*------------------------------------------------------------
                           METHODES
    -------------------------------------------------------------*/
 
    public function ajout_auteur($auteur){
        $this->tab_auteurs[] = $auteur;
    }

    //va récupérer les auteurs dans la bdd
    public function recuperation_auteurs(){

        //requête préparée, ORDER BY pour mettre en ordre
        $req = $this->getBdd()->prepare("SELECT * FROM auteurs");
        $req ->execute();
        //récupération des valeurs dans la vaiable $liste_auteurs sous forme de tableau associatif
        // PDO//FETCH_ASSOC permet d'éviter le doublon
        $liste_auteurs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        //on veut parcourir le tableau $liste_auteurs pour en ressortir des objets $auteur
        foreach($liste_auteurs as $auteur){
            $e = new Auteur($auteur['id_auteur'],$auteur['nom_auteur'],$auteur['image_auteur'],$auteur['oeuvres_auteur']);
            
            //on veut ajouter les éditions créées dans le tableau $tab_auteurs, grâce aux appels des ≠ fonctions et variables:
            $this->ajout_auteur($e);
        }

    }



}


?>