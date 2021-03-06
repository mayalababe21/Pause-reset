<?php 

// obligatoire pour utiliser les sessions
session_start();
// Obligatoire pour se connecter avec la base données (phpmyadmin)
require 'conf/config-sql.php';

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Pause'Reset &mdash; *Good Vibes*</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
    <!-- 1-outils -->
    <?php include("1-outils.php"); ?>
    <!-- FIN 1-outils -->

    <!-- 2-menu -->
    <?php include("2-menu.php"); ?>
    <!-- FIN 2-menu -->
  
    <!-- 3-corps -->
     <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/jeu.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Challenges</h1>
                <p class="lead mb-5">Tous les mois, tentez de gagner des cadeaux pleins de positivité</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

    <section>
      <div class="container">
        <div class="row">
            <h1 class="text-info">- Challenge de Septembre 2019 -<br></h1>
            <h2 class="text-success">Et oui, c'est partie que le premier challenge commence ! </h1><br>
            <p> C'est le premier donc je vous explique un peu le concept, nous sommes une petite start-up qui va lancer dans très peu de temps une application géniale appelée : Pause Reset ! </p><br>
            <p> L'intégralité de nos challenges vous font gagner des points, chaque point à une valeur</p>
            <p>Nous vous expliquons, il existe différents paliers et à chaque paliers franchis vous gagner des cadeaux, c'est pas chouette ça ? En est plus c'est 100% gratuit !</p><br>
            <p>Oui nous penson à vous mais également à votre bonheur et bien-être c'est le concept !</p>
            <p> Pour ce premier challenge, une "chasse" est ouverte. 
            Pour trouver l'entrée de cette chasse vous devez arpenter l'intégralité de notre site !</p>
            <p> Bonne chasse à tous et que le meilleur gagne. <br>
             Petit indice : commencez par le concept, c'est judicieux !
            <br>
            <b>L'équipe Pause Reset.
            <br /></p>
        </div>
      </div>
    </section>
   </body>






    <?php include("4-footer.php"); ?>
    <!-- FIN 4-footer -->

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>