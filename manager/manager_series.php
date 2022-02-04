<?php

require_once './config/connectBdd.php';

//on utilise la class Serie dans la class, donc on fait un require
require_once './model/serie.php';

class Manager_serie extends Connexion{


    /*------------------------------------------------------------
                                ATTRIBUTS
    -------------------------------------------------------------*/
        //on y met le tableau des series
        private $tab_series;

    
    /*------------------------------------------------------------
                                CONSTRUCTEUR
    -------------------------------------------------------------*/
        //Vide car on en a pas besoin
        // public function __construct(){ 
        // } 


    /*------------------------------------------------------------
                                GETTERS & SETTERS
    -------------------------------------------------------------*/
    
        //Get de $tab_series pour récupérer les éditions
        public function get_series(){
            return $this->tab_series; //permet de retourner le tableau $tab_series
        }
    /*------------------------------------------------------------
                           METHODES
    -------------------------------------------------------------*/
 
    public function ajout_serie($serie){
        $this->tab_series[] = $serie;
    }

    //va récupérer les series dans la bdd
    public function recuperation_series(){

        //requête préparée, ORDER BY pour mettre en ordre, et DESC par ordre croissant d'id
        $req = $this->getBdd()->prepare("SELECT * FROM series");
        $req ->execute();
        //récupération des valeurs dans la vaiable $liste_series sous forme de tableau associatif
        // PDO//FETCH_ASSOC permet d'éviter le doublon
        $liste_series = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        //on veut parcourir le tableau $liste_series pour en ressortir des objets $edition
        foreach($liste_series as $serie){
            $s = new serie($serie['id_serie'],$serie['nom_serie'],$serie['image_serie'],$serie['resume_serie']);
            
            //on veut ajouter les series créées dans le tableau $tab_series, grâce aux appels des ≠ fonctions et variables:
            $this->ajout_serie($s);
        }

    }



}