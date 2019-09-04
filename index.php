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

    <!------ AJOUT CARO! mon-compte-ident-crea ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ fin AJOUT ------>
    
  </head>
  <body>
  
    <!-- 1-outils -->
    <?php include("1-outils.php"); ?>
    <!-- FIN 1-outils -->

    <!-- 2-menu -->
    <?php include("2-menu.php"); ?>
    <!-- FIN 2-menu -->
  
    <!-- 3-corps -->
    <div class="site-blocks-cover overlay" style="background-image: url(images/personne-index.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Pause'Reset <span class="typed-words"></span></h1>
                <p class="lead mb-5">*Good Vibes*</p>
                <div><a href="concept.php" class="btn btn-warning btn-md">En savoir plus</a></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

<!-- Présentation génèrale / Gros bloc --> 
    <section class="section ft-feature-1">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-12 bg-dark w-100 ft-feature-1-content">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="h-100">
               
                  <img src="images/happy-people-index.jpg" alt="Image" class="img-feature img-fluid">
                </div>
              </div>
<!-- Bloc --> 
              <div class="col-lg-3 ml-auto">
                <div class="mb-5">
                  <h3 class="d-flex align-items-center text-info"><span class="icon icon-phonelink mr-2"></span><span>Notre application</span></h3>
                  <p>Notre application est conçu pour aider les personnes actives à faire une pause dans leur quotidien.</p>
                </div>
              </div>
<!-- Bloc --> 
                <div class="col-lg-3">
                 <div class="mb-5">
                  <h3 class="d-flex align-items-center text-warning"><span class="icon icon-extension mr-2"></span><span>Android &amp; IOS</span></h3>
                  <p>Notre application est disponible sur les stores Android et IOS.</p>
                </div>
              </div>
<!-- Bloc --> 
              <div class="col-lg-3 ml-auto">
                <div class="mb-5">
                  <h3 class="d-flex align-items-center text-success"><span class="icon icon-format_paint mr-2"></span><span>Sur mesure</span></h3>
                  <p>Nous avons créé pour vous une application sur mesure qui vous permettra de suivre vos passions.</p>
                </div>
              </div>
<!-- Bloc --> 
                <div class="col-lg-3">
                   <div class="mb-5">
                     <h3 class="d-flex align-items-center text-light"><span class="icon icon-question_answer mr-2"></span><span>1 minute chrono !</span></h3>
                         <p>L'ensemble du contenu (vidéos, photos, images, musiques) durent quelques minutes, pour que les pauses soient éfficaces.</p>
                    </div> 
                        <button type="button" class="btn btn-primary btn-lg btn-block btn btn-outline-info"><a href="concept.php">En savoir plus</a></button>
                </div>

               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- FIn de la présentation --> 


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
              <div class="number-behind2">02.</div>
              <h2>Notre mission</h2>
              <p>Articuler des pauses
                compatibles avec des emplois du temps charges,en pleine adéquationavec les préconisations médicales anti-stress.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind3">03.</div>
              <h2>Notre philosophie</h2>
              <p>Varier les plaisirs et laisser l’internaute choisir son type de pauseau grès de ses envies, de ses humeurs ;rien de tel pour se re-booster !
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <HR size=4 align=center width="100%">

    <section class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Notre projet, votre application.</h2>
            <p class="lead">Nous avons souhaité developper une application qui vous fasses du bien et qui vous permettra en l'espace de quelques instants de vous ressourcer. </p>
          </div>
        </div>
      </div>
 

          <div class="col-12 text-center mt-5">
            <a href="challenges.php" class="btn btn-success btn-md">Tous les challenges</a>
          </div>

          
        </div>
      </div>
    </section>


    <section class="site-section testimonial-wrap">
    
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;vbjkdllj&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Rayan Ducastelle</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Notre temps est précieux, gardons le pour les applications qui nous épanouissent&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Eva Pourcel</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Caroline Faget</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_5.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section>

    <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Blog</h2>
          </div>
        </div>

        <div class="row">
        <div class="col-md-8">
            <div class="row mb-5">
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
                    <a href="blog_2.php">Psychologue</a></div> 
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
        
          
        </div>
      </div>
    </section>

    <a href="mon-compte-ident-crea.php" class="bg-success py-5 d-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white">Je veux jouer &amp; créer mon compte !</h2></div>
        </div>
      </div>  
    </a>
    <!-- FIN 3-corps -->
    
    <!-- 4-footer -->
    <?php include("4-footer.php"); ?>
    <!-- FIN 4-footer -->

  </div>
    
    <!-- 5-scripts -->
    <?php include("5-scripts.php"); ?>
    <!-- FIN 5-scripts -->
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Reboost","Evasion","Détente","Personnalisé"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
    
  </body>
</html>