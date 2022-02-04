<link rel="stylesheet" href="./css/popup_connexion.css"> 
<link rel="stylesheet" href="./css/header_accueil.css"> 
    
<script src="./script/header_popup.js" defer></script>

<header>
        <a href="./controler_accueil.php"><img id="logo" src="./Images/logo.jpg" alt="logo"></a>
            <nav class="nav">
                <a href="./controler_series.php" target="_blank">
                    <li>Séries</li>
                </a>
                <a href="./controler_auteurs.php" target="_blank">
                    <li>Auteurs</li>
                </a>
                <a href="./controler_editions.php" target="_blank">
                    <li>Editions</li>
                </a>
                <a href="mailto:d.weishar@427hotmail.fr">
                    <li>Contact</li>
                </a>
            </nav>

        <!--bouton de connexion-->
        
            
            <!-- Popup de connexion -->
           
        <div id="momma">
            <button id="connection">Se connecter</button>
            <button id="inscription"><a href="./controler_inscription.php">S'inscrire</a></button>
           

            <!--bouton de langues
            
                Je dois rajouter la version anglaise
            
                -->

            <button id="french"><a><img src="./Images/logo_france.jpg" width="50px" height="40px"></a></button>
            <button id="english"><a><img src="./Images/logo_english.jpg" width="50px" height="40px"></a></button>
        </div>
        <div id="bg_modal" class="bg_modal" >
                <div id="modal-content" >
                    <img id="closed"  src="./Images/close.png" alt="">
                    <h1>Connexion</h1>
                    <form action="">
                        <input type="text" placeholder="Pseudo"><br>
                        <input type="text" placeholder="Mot de passe">
                        <button type="submit">Se Connecter</button>
                    </form>
                </div>

            </div>
         
      
    </header>

       


