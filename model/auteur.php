<?php

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS AUTEUR:
-----------------------------------------------------------------------------------------------------*/

class Auteur{

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $id_auteur;
        private $nom_auteur;
        private $image_auteur;
        private $oeuvres_auteur;

        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($id_auteur, $nom_auteur, $image_auteur, $oeuvres_auteur){ 
            $this->id_auteur = $id_auteur;
            $this->nom_auteur = $nom_auteur;   
            $this->image_auteur = $image_auteur;   
            $this->oeuvres_auteur = $oeuvres_auteur;                
      
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $id_auteur:
        public function getId_auteur(){
            return $this->id_auteur;
        }
        public function setId_auteur($newId_auteur){
            $this->id_auteur = $newId_auteur;
        }

        // Get & Set de l'attribut $nom_auteur:
        public function getNom_auteur(){
            return $this->nom_auteur;
        }
        public function setNom_auteur($newNom_auteur){
            $this->nom_auteur = $newNom_auteur;
        }
        
        // Get & Set de l'attribut $image_auteur:
        public function getImage_auteur(){
            return $this->image_auteur;
        }
        public function setImage_auteur($newImage_auteur){
            $this->new_auteur = $newImage_auteur;
        }
         // Get & Set de l'attribut $preauteur:
         public function getOeuvres_auteur(){
            return $this->oeuvres_auteur;
        }
        public function setOeuvres_auteur($newOeuvres_auteur){
            $this->oeuvres_auteur = $newOeuvres_auteur;
        }

        /*------------------------------------------------------------
                               METHODES
            -------------------------------------------------------------*/
            public function create (){
            }
    
            public function show (){
            }
    
            public function modify (){
            }
    
            public function delete (){
            }
       
    }
    

?>