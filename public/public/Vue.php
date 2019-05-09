<?php

function enTete($titre)
{
        $current_page = basename($_SERVER['SCRIPT_FILENAME']);

    echo '<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>'.$titre.'</title>
            <link rel="stylesheet" href="Style.css"/>
            <link rel="icon" href="good.ico" type="image/x-icon" />
            <meta name="theme-color" content="#3F51B5">
        </head>

        <body>
            <div class="wrapper">
                <header>';

    echo '<h1>'.$titre.'</h1>';

    echo '<div class="clearfix"></div></header><section class="main">';
}


function pied() {
    echo '
            </div>
        </body>
    </html>';
}

/* Affichage basique d'une chaîne */
function affiche($str) { echo $str; }

/* Affichage d'une information */
function affiche_info($str) { echo '<p>'.$str.'</p>'; }

/* Affichage d'une erreur */
function affiche_erreur($str) { echo '<p class="erreur">'.$str.'</p>'; }


function retour_menu()
{
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if ($actual_link != "http://localhost:8080/index.php" && $actual_link != "http://localhost:8080/Connexion.php"){
     print '<a href="index.php"><i class="material-icons">arrow_back</i></a>';
    }
    echo '<p></p>';
	if ($actual_link != "http://localhost:8080/Quitter.php"){
   print '<a href="Quitter.php" class="logout"><i class="material-icons">power_settings_new</i></a>';
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












