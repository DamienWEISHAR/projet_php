<?php 

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS EDITION:
-----------------------------------------------------------------------------------------------------*/

class Edition {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $id_edition;
        private $nom_edition;
        private $image_edition;
        private $presentation_edition;

        
            
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($id_edition, $nom_edition, $image_edition, $presentation_edition){ 
            $this->id_edition= $id_edition; 
            $this->nom_edition= $nom_edition;     
            $this->image_edition= $image_edition;     
            $this->presentation_edition= $presentation_edition;  
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $id_edition:
        public function getId_edition(){
            return $this->id_edition;
        }
        public function setId_edition($newId_edition){
            $this->nom = $newId_edition;
        }

        // Get & Set de l'attribut $nom_edition:
        public function getNom_edition(){
            return $this->nom_edition;
        }
        public function setNom_edition($newNom_edition){
            $this->nom = $newNom_edition;
        }
        // Get & Set de l'attribut $image_edition:
        public function getImage_edition(){
            return $this->image_edition;
        }
        public function setImage_edition($newImage_edition){
            $this->nom = $newImage_edition;
        }

        // Get & Set de l'attribut $presentation_edition:
        public function getPresentation_edition(){
            return $this->presentation_edition;
        }
        public function setPresentation_edition($newPresentation_edition){
            $this->nom = $newPresentation_edition;
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