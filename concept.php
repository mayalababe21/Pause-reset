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
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/concept-photos-rouages.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Le Concept</h1>
                <p class="lead mb-5">Partager les *Good Vibes* avec le plus grand nombre !</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">

            <div class="row">

              <div class="col-12 mb-4">
                <div class="text-left pb-1 border-success mb-4">
                  <h2 class="text-info">Notre concept</h2>
                  <p> C'est une application mobile et desktop conçue pour offrir, tout au long de la journée de façon régulière et personnalisée, des micro-pauses. Notre programme permet à l’utilisateur de choisir au préalable selon ses préférences et ses envies des thématiques et des exercices ciblés.</p> 
                
                  <p>Notre programme permet à l’utilisateur de s’évader, de trouver le sourire grace à un instant de joie et de divertissement. Pause’Reset est un programme auto-apprenant, par conséquent le contenu est personnalisé afin qu’il puisse parfaitement correspondre aux envies de son utilisateur. </p>
                  
                  <p> Grâce à notre programme et notre contenu ; des vidéos, actualités, musiques, exercices, conseils coaching, etc. Nous promettons à l’utilisateur de libérer son esprit et de devenir meilleur. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <HR size=4 align=center width="100%">
  
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">01.</div>
              <h2>Nos valeurs</h2>
              <p>
Offrir une expérience unique à chaque pause ressourcante et re-vigourante.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">02.</div>
              <h2>Notre mission</h2>
              <p>Articuler des pauses
                compatibles avec des emplois du temps charges,en pleine adéquationavec les préconisations médicales anti-stress.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">03.</div>
              <h2>Notre philosophie</h2>
              <p>Varier les plaisirs et laisser l’internaute choisir son type de pauseau grès de ses envies, de ses humeurs ;rien de tel pour se re-booster !
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <HR size=4 align=center width="100%">
    
    <div class="site-section border-bottom">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-success">
            <h2 class="font-weight text-success" data-aos="fade">Notre Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person">
              <img src="images/eva.png" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Eva Pourcel</h3>
              <p class="position text-muted">Co-fondateur</p>
              <p class="mb-4">"Notre temps est précieux, gardons le pour les applications qui nous épanouissent."</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person">
              <img src="images/rayan.png" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Rayan Ducastelle</h3>
              <p class="position text-muted">Co-fondateur</p>
              <p class="mb-4">Nous réalisons les plus grandes choses dans la vie,  quand nous sommes heureux.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person">
              <img src="images/caroline.png" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Caroline Faget</h3>
              <p class="position text-muted">Co-fondateur</p>
              <p class="mb-4">Le bien-être et le bonheur doivent être à la portée de tous, rendons le accessible.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    


    
    <a href="quizz.php" class="bg-success py-5 d-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white">Cliquez ici est vous devinerez l'entrée</h2></div>
        </div>
      </div>  
    </a>
    <!-- FIN 3-corps -->
    
    <!-- 4-footer -->
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