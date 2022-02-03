<link rel="stylesheet" href="./css/s_a_e.css">

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
        <div id="momma">
            <button id="connexion">Se connecter</button>
            <button id="inscription"><a href="../HTML/Inscription.html">S'inscrire</a></button>


            <!--bouton de langues
            
                Je dois rajouter la version anglaise
            
                -->

            <button id="french"><a><img src="./Images/logo_france.jpg" width="50px" height="40px"></a></button>
            <button id="english"><a><img src="./Images/logo_english.jpg" width="50px" height="40px"></a></button>
        </div>
        
    </header>
    <!--barre de recherche-->
    <section class="barre_recherche">
        <input type="search" id="barre_recherche" name="barre_recherche" placeholder="Rechercher">
        <button><img src="./Images/loupe.png" alt="loupe" ></button>
        <!--on click, go to the research results-->
    </section>