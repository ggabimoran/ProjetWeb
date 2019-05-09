<?php
//include("Modele.php");

function enTete($titre)
{
    print "<!DOCTYPE html>\n";
    print "<html>\n";
    print "  <head>\n";
    print "    <meta charset=\"utf-8\" />\n";
    print "    <title>$titre</title>\n";
    print "    <link rel=\"stylesheet\" href=\"Style.css\"/>\n";
    print "  </head>\n";
    
    print "  <body>\n";
    print "    <header><h1> $titre </h1></header>\n";
}



function enTete2($titre)
{
        $current_page = basename($_SERVER['SCRIPT_FILENAME']);

    echo '<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>'.$titre.'</title>
            <link rel="icon" href="good.ico" type="image/x-icon" />
            <meta name="theme-color" content="#3F51B5">
            <link rel="stylesheet" type="text/css" href="main.css">
            <link rel="stylesheet" type="text/css" href="navbar.css">
            <link rel="stylesheet" type="text/css" href="page.css">
            <link rel="stylesheet" type="text/css" href="sidebar.css">
            <link rel="stylesheet" type="text/css" href="aside.css">
        </head>

        <body>

           <nav class="nav navbar">
             <div class="prompt">
                <i class="prompt-logo fa fa-search navbar-search-logo"></i>
                <input class="prompt-input" type="text" placeholder="Rechercher..."/>
             </div>
           </nav>

        <section class="sidebar">

            <img class="sidebar-logo" src="./images/logo2.png" />

            <div class="sidebar-section">
                <div class="sidebar-section-title">Menu</div>
                <div class="sidebar-section-item"><i class="fa fa-home"></i>Accueil</div>
            </div>


            <div class="sidebar-section">
                <div class="sidebar-section-title">Classification</div>
                <div class="sidebar-section-item"><img src="./images/lol.png"/>Nourriture</div>
                <div class="sidebar-section-item"><img src="./images/fortnite.png"/></i>Quotidiennes</div>
                <div class="sidebar-section-item"><img src="./images/hs.png"/></i>Électroniques</div>
                <div class="sidebar-section-item"><img src="./images/csgo.png"/></i>Cuisine</div>
            </div>

            <div class="sidebar-section">
                <div class="sidebar-section-title">A propos de nous</div>
                <div class="sidebar-section-item"><i class="fa fa-users"></i>L\'équipe</div>
                <div class="sidebar-section-item"><i class="fa fa-book"></i>Notre politque</div>
                <div class="sidebar-section-item"><i class="fa fa-gavel"></i>Contribuer</div>
                <div class="sidebar-section-item"></div>
            </div>
        </section>

                <section class="aside">

            <form class="aside-login-form" action="connect.php" method="post">>


                <div id="email" class="prompt">
                    <i class="prompt-logo fa fa-envelope navbar-search-logo"></i>
                    <input class="prompt-input" name="email" type="text" placeholder="Adresse mail..."/>
                </div>

                <div id="pseudo" class="prompt">
                    <i class="prompt-logo fa fa-user navbar-search-logo"></i>
                    <input class="prompt-input" name="psd" type="text" placeholder="Pseudo..."/>
                </div>

                <div id="pass" class="prompt">
                    <i class="prompt-logo fa fa-lock navbar-search-logo"></i>
                    <input class="prompt-input" name="mdp" type="password" placeholder="Mot de passe..."/>
                </div>


                <div id="pass_confirm" class="prompt">
                    <i class="prompt-logo fa fa-lock navbar-search-logo"></i>
                    <input class="prompt-input" name="cmdp" type="password" placeholder="Confirmer..."/>
                </div>

                <div class="aside-login-labels">
                    <a class="label label-button" name="conneter" onclick="switchView(false);">Se connecter</a>
                    <span class="label"> | </span>
                    <a class="label label-button" name="ensegistrer" onclick="switchView(true);">S\'enregistrer</a>
                </div>


                <iframe
                    class="aside-discord"
                    src="https://discordapp.com/widget?id=432533096609480704&theme=dark"
                    allowtransparency="true"
                    frameborder="0">
                </iframe>


             <canvas class="page-background" id="bgCanvasID"></canvas>
        <div class="page">
             <div class="page-content">
             </div>

        </div>

                <header>';


    echo '<h1>'.$titre.'</h1>';

}


function pied(){
  echo '</body></html>';
}

function affiche($str) {
    echo $str;
}


function affiche_info($str) {
    echo '<p>'.$str.'</p>';
}

function affiche_erreur($str) {
    echo '<p class="erreur">'.$str.'</p>';
}

function retour_menu() 
{ 
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ($actual_link != "http://localhost:8080/index.php"){
       echo '<a href="index.php">Menu</a>';
   }
   echo '<p></p>';
   if ($actual_link != "http://localhost:8080/Quitter.php"){
       echo '<a href="Quitter.php">Quitter</a>';
   }
}

function vue_connexion() {

    echo '<section>
    <p> Bonjour, bienvenue sur l\'application de gestion des transactions intergalactiques de gré à gré.
    Commencez par vous authentifier </p>

    <br/>

    <form action="VerifMDP.php" method="post">
    <label>Entrez votre pseudo :</label> <input type="pseudo" name="psd" size="8"/><br/>
    <label>Entrez votre mot de passe :</label> <input type="password" name="mdp" size="8"/><br/>
    <input type="submit" value="Valider"/>
    </form>
    </section>';

}

function vue_lieu() {

    echo '<section>
    <p> Bonjour, bienvenue sur l\'application de gestion des transactions intergalactiques de gré à gré.
    Commencez par indiquer votre lieu </p>

    <br/>

    <form action="Annonces.php" method="post">
    <label>Entrez votre planète :</label> <input type="planet" name="plt" size="8"/><br/>
    <label>Entrez votre ville :</label> <input type="city" name="cty" size="8"/><br/>
    <input type="submit" value="Valider"/>
    </form>
    </section>';

}

function connexion_link() {
    if ($GLOBALS['AUTHENT'] == 0){
        echo '<a href=Connexion.php>Connexion</a>';
    }
    else{
        echo '<a href=index.php>Déconnexion</a>';
    }
    //echo $GLOBALS['AUTHENT'];
}











