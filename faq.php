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
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/faq-images2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>FAQ</h1>
                <p class="lead mb-5">Tout ce que vous voulez savoir : Appli Mobile Android & IOS, Appli Desktop PC & Mac, Tarifs...</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Comment puis-je être avertis de la sortie de l'application ? 
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        C'est très simple, il vous suffit de s'inscrire sur notre newsletter ainsi tu auras toutes les informations sur la sortie de l'application, des challenges. 
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          L'application aura t'elle une partie gratuite ? 
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Oui bien évidemment, nous avons une partie de l'application qui est freenum pour que vous puissiez la découvrir tranquillement. 

        <br></br>

        <div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-6 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">0 €<small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Gratuit</li>
          <li>Limite à 3 séances</li>
          <li>Pause'Reset par jour</li>
          <li>Bonus</li>
        </ul>
      </div>
    </div>
    <div class="card mb-6 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Premium</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> 0,90 € <small class="text-muted">/Mois</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Accès à toutes les fonctionnalités en illimité</li>
          <li>Fonctionnalités +, cadeaux +</li>
          <li>Mise en favoris des pauses pour visionner ultérieur</li>
          <li>Renouvellement /6 ou par an</li>
        </ul>
      </div>
    </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          L'application est-elle compatible pour IOS et Android ? 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        L'application est compatible que ce soit pour IOS ou pour Android. Il est très important pour nous que notre application soit accessible pour tous et partout. 
        Vous pourrez retrouver notre application sur l'apple store pour IOS et sur Play store pour Android. 
      </div>
    </div>
  </div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Ou peut-on retrouver les challenges / jeux ? 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      Vous pouvez retrouver les challenges dans l'onglet "Challenges". 
      </div>
    </div>
  </div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Comment je peux modifier mon mot de passe ? 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
              Pour modifier votre code confidentiel sur le site internet :
      1.  connectez-vous sur depuis un ordinateur ou une tablette
      2.  cliquez ensuite sur "Mon profil" (pictogramme bonhomme en haut à gauche)
      3.  puis cliquez sur "Modifier mon code confidentiel" (à gauche)
      Pour modifier votre code confidentiel particulier sur l’application smartphone :

      </div>
    </div>
  </div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Comment signaler un dysfonctionnement de l’application ou autre ? 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Vous pouvez nous signaler un dysfonctionnement de l'application ou autre par le biais de notre onglet "contact". 
        Si vous rencontrez des problèmes lors de l'utilisation de l'application mobile, assurez vous que celle-ci est bien à jour, c’est à dire que vous avez la dernière version installée.
        Rendez-vous dans l’AppStore pour vérifier si votre application est à jour, si ce n’est pas le cas une pastille « Mettre à jour » apparaîtra en face de l’application.
        Si vous n’arrivez pas à voir dans l’appstore comment mettre à jour vous pouvez aussi désinstaller puis réinstaller l’application afin d'obtenir la dernière version disponible.
        Assurez vous également d'avoir un accès à Internet (Wifi ou 3G/4G) lorsque vous passez une commande.

      </div>
    </div>
  </div>
</div>
   
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