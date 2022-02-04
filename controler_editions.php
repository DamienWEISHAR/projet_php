<?php

//ajout de la vue:


require_once './manager/manager_editions.php';

class Controler_editions{

    /*------------------------------------------------------------
                                ATTRIBUTS
    -------------------------------------------------------------*/
        private $manager_edition;

    /*------------------------------------------------------------
                            CONSTRUCTEUR
    -------------------------------------------------------------*/
    
        public function __construct(){ 
            $this->manager_edition = new Manager_edition();          
            $this->manager_edition -> recuperation_editions();
        }

        public function afficherEditions(){
            $manager_edition = $this->manager_edition;
            require_once './vue/vue_editions.php';
        }


}



?>
