<?php

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
	echo '<a href="Quitter.php">Déconnexion</a>';
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












