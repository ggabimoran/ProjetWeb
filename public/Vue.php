<?php
//include("Modele.php");

function enTete($titre)
{
      echo '
    <!DOCTYPE html>
    <html>
     <head>
    <meta charset=\"utf-8\"
    <title>'.$titre.'</title>
     <link rel=\"stylesheet\" href=\"Style.css\"/>


   <footer id="footer" class="section section-grey">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <div class="footer-logo">
              <a class="logo" href="#">
                <img src="./img/logo.png" alt="">
              </a>
            </div>

            <p>Make the deal easier</p>

            <ul class="footer-social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">My Account</h3>
            <ul class="list-links">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Checkout</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>
        </div>

        <div class="clearfix visible-sm visible-xs"></div>


        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">Customer Service</h3>
            <ul class="list-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Shiping & Return</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
        </div>



        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">Stay Connected</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <form>
              <div class="form-group">
                <input class="input" placeholder="Enter Email Address">
              </div>
              <button class="primary-btn">Join Newslatter</button>
            </form>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </footer> '
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


   <div id="home">
   <div class="container">
   <div class="home-wrap">
    <div id="home-slick">
          <div class="banner banner-1">
            <img src="./img/banner01.jpg" alt="banner">
            <div class="banner-caption text-center">
              <h1>Bags sale</h1>
              <h3 class="white-color font-weak">Up to 50% Discount</h3>
              <button class="primary-btn">Shop Now</button>
            </div>
          </div>
          <div class="banner banner-1">
            <img src="./img/banner02.jpg" alt="banner">
            <div class="banner-caption">
              <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
              <button class="primary-btn">Shop Now</button>
            </div>
          </div>

          <div class="banner banner-1">
            <img src="./img/banner03.jpg" alt="">
            <div class="banner-caption">
              <h1 class="white-color">New Product <span>Collection</span></h1>
              <button class="primary-btn">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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

    <form class="aside-login-form" action="AccountCreation.php" method="post">>


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
    <input type="submit" value="S\'enregistrer"/>
    </form>

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

  <footer id="footer" class="section section-grey">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <div class="footer-logo">
              <a class="logo" href="#">
                <img src="./img/logo.png" alt="">
              </a>
            </div>


            <p>Make the deal easier</p>

            <ul class="footer-social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">My Account</h3>
            <ul class="list-links">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Checkout</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>
        </div>

        <div class="clearfix visible-sm visible-xs"></div>


        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">Customer Service</h3>
            <ul class="list-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Shiping & Return</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
        </div>



        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">Stay Connected</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <form>
              <div class="form-group">
                <input class="input" placeholder="Enter Email Address">
              </div>
              <button class="primary-btn">Join Newslatter</button>
            </form>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </footer>

    </div>';


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

}

function create_account_link() {
    echo '<a href=Creation.php>Create account</a>';
}

function vue_creation(){
 echo '<section>
 <p> Bonjour, bienvenue sur l\'application de gestion des transactions intergalactiques de gré à gré. </p>

 <br/>

 <form action="Account_Insert.php" method="post">
 <label>Entrez votre pseudo :</label> <input type="pseudo" name="psd" size="8"/><br/>
 <label>Entrez votre mot de passe :</label> <input type="password" name="mdp" size="8"/><br/>
 <label>Entrez votre city id :</label> <input type="city_id" name="city_id" size="8"/><br/>
 <input type="submit" value="Valider"/>
 </form>
 </section>';
}

function vue_infomation(){
    echo '<section>
    <p> Bonjour, bienvenue sur l\'application de gestion des transactions intergalactiques de gré à gré. </p>

    <br/>

    <form action="search_info_prso.php" method="post">
    <label>Entrez votre pseudo :</label> <input type="pseudo" name="psd" size="8"/><br/>
    <input type="submit" value="Valider"/>
    </form>
    </section>';
}


function vue_info_perso($user, $message){
    echo '<div class="container">
    <table class="table table-bordered table-hover table-striped">
    <thead style="font-weight: bold">
    <td>UserId</td>
    <td>Pseudo</td>
    <td>city_id</td>
    <td>sender</td>
    <td>receiver</td>
    <td>pdate</td>
    <td>message</td>

    </thead>
    <?php /** @var \User\User $user */
    foreach ($users as $user) : ?>
    <tr>
    <td><?php echo $user->getId() ?></td>
    <td><?php echo $user->getPseudo() ?></td>
    <td><?php echo $user->getCityId() ?></td>
    <td><?php echo $message->getSender() ?></td>
    <td><?php echo $message->getReciver() ?></td>
    <td><?php echo $message->getPDate() ?></td>
    <td><?php echo $message->getMessage() ?></td>

    </tr>
    <?php endforeach; ?>
    </table>
    </div>

    <nav>
    <a href="Connexion.php">Connexion</a>
    <a href="Accueil.php">Accueil</a>
    </nav>

    <footer>
    <p>Informations complémentaires :</p>
    </footer>';
}






