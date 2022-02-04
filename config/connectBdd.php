<?php   
    //connexion à la base de données
   
    class Connexion{

        private static $bdd;

        private function setBdd(){
            self::$bdd = new PDO('mysql:host=localhost;dbname=manga4all', 'root','', 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }

        //protected pour que les enfants puissent l'utiliser
        protected function getBdd(){
            if(self::$bdd === null){
                $this->setBdd();
            }
            //appel de $bdd appliqué sur la class elle-même
            return self::$bdd;
        }
    }
   
?>