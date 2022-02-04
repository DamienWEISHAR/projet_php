<?php

if (empty($_GET['page'])){
    require './vue/vue_accueil.php';
} else {
    switch($_GET['page']){
        case "accueil":
            require './vue/vue_accueil.php';
        break;
        case "series":
            require './vue/vue_series.php';
        break;
        case "auteurs":
            require './vue/vue_auteurs.php';
        break;
        case "editions":
            require './vue/vue_editions.php';
        break;
        case "inscription":
            require './vue/vue_inscription.php';
    }
}
 


//define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


// try{

//     if(isset($_GET['page'])) {
        
//         //J'explose le contenu de GET pas sous forme de tableau
//         //Chaque sous URL correspondra à un index du tableau
//         $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
//     }

//     if(empty($url[0])){ //si url pas spécifiée
//         //afficher la vue_accueil
//         require './vue/vue_accueil.php';
//     } else {
//         switch ($url[0]){
//             case "accueil":
//                 require './vue/vue_accueil.php';
//                 break;
            
//             if(empty($url[1] )){
//                 require './vue/vue_accueil.php';
//             }else if($url[1] === "series"){
//                 require 'controler_series.php';
//             }else if($url[1] === "auteurs"){
//                 require 'controler_auteurs.php';
//             } else if($url[1] === "editions") {
//                 require 'controler_editions.php';
//             } else if($url[1] ==="inscription"){
//                 require 'controler_inscription.php';
//             } else {
//                 throw new Exception ("La page que vous demandez n'existe pas");
//             }
//             break;
//             default: throw new Exception(require './vue/vue_error.php');                         
            
//         }
//     }
// }catch (Exception $e) {
//     echo $e->getMessage();
    
// }





?>