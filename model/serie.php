<?php
/*-----------------------------------------------------------------------------------------------------
CREATION CLASS SERIE:
-----------------------------------------------------------------------------------------------------*/

class Serie {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $id_serie;
        private $nom_serie;
        private $image_serie;
        private $resume_serie;

        
            
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($id_serie, $nom_serie, $image_serie, $resume_serie){ 
            $this->id_serie= $id_serie; 
            $this->nom_serie= $nom_serie;     
            $this->image_serie= $image_serie;     
            $this->resume_serie= $resume_serie;  
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $id_serie:
        public function getId_serie(){
            return $this->id_serie;
        }
        public function setId_serie($newId_serie){
            $this->nom = $newId_serie;
        }

        // Get & Set de l'attribut $nom_serie:
        public function getNom_serie(){
            return $this->nom_serie;
        }
        public function setNom_serie($newNom_serie){
            $this->nom = $newNom_serie;
        }
        // Get & Set de l'attribut $image_serie:
        public function getImage_serie(){
            return $this->image_serie;
        }
        public function setImage_serie($newImage_serie){
            $this->nom = $newImage_serie;
        }

        // Get & Set de l'attribut $resume_serie:
        public function getResume_serie(){
            return $this->resume_serie;
        }
        public function setResume_serie($newResume_serie){
            $this->nom = $newResume_serie;
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
