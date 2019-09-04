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
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/conversation-blog.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Blog</h1>
                <p class="lead mb-5">Tout pour vous rendre serein(e) !</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  
    
    <section class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <div class="row mb-4">
              <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="images/about_1.jpg" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="blog_1.php">Grâce aux micro-pauses améliorer vos performances au travail. </a></h2>
                  <div class="meta mb-4">Francis Blandeau <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <br>
                    <a href="blog_1.php">Chef d'entreprise et influenceur.</a></div> 
                  <p>Nos méthodes de travail actuelles peuvent être épuisantes. Sous la pression du temps, nous avons du mal à prendre des pauses.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="images/blog-pause.jpg" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="blog_2.php">Au travail, la micro-pause s'impose ! </a></h2>
                   <div class="meta mb-4">Elisa Pouillac <span class="mx-2">&bullet;</span> Mars 6, 2019<span>
                    <a href="blog_1.php">Psychologue</a></div> 
                  <p>Il est conseillé de faire des micro-pauses au travail. Elles nous aident à être plus productif et créatif ! </p>
                </div>
              </div>
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="images/socia-media-blog.jpg" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="blog_3.php">Nous passons trop de temps sur les réseaux sociaux, ça devient un poison pour nos relations ! </a></h2>
                  <div class="meta mb-4">Albert Figeaco <span class="mx-2">&bullet;</span> Nov, 25 2018<span class="mx-2">&bullet;</span> <br>
                    <a href="blog_3.php">Sociologue</a></div> 
                  <p> Les réseaux sociaux prennent de plus en plus temps de notre quotidien. Du réveil au coucher, nous recherchons des informations ou des nouvelles. Cependant, une étude constate que les jeunes oublier les relations humaines en privilégiant le digital.</p>
                </div> 
              </div>
              
            <div class="row">
              <div class="col-12">
                <div class="custom-pagination text-center">
                  <span>1</span>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <span class="more-page">...</span>
                  <a href="#">10</a>
                </div>
              </div>
            </div>
          </div> 

        </div>

        </div>
      </div>
    </section>
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