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
  
    <!-- 3-corps -1 -->


    <!-- 3-corps -2 --> 




    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/jemabonne-couverture.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">




                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>JE M'ABONNE !</h1>
                <p class="lead mb-5">Je reste connecté avec Pause'Reset (applis Mobile)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

 <section class="site-section border-bottom">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-md-6" data-aos="fade-up">
          <h2>Comment télécharger notre application ?</h2>
          <p text="justify-content-center">En réalité c'est très simple, celà dépend de ce que vous utiliser comme outils. (exemple : téléphone, ordinateur). 
            <br>
            Dans le cas ou c'est le télèphone deux options s'offre à vous selon votre mobile : </br>
            <br>- <strong>Iphone</strong> = Télécharger l'application sur le store de votre télèphone qui pour votre cas est AppStore (icone bleu) et faites une recherche. </br>

           <br> - <strong> Android</strong> = Télécharger l'application sur le store de votre téléphone qui pour votre cas est Google Play Store. Appuyez sur l'icone dans votre télèphone est rechercher notre application 'Pause Reset' dans la barre de recherche. </br></p>

          Pour vous simplifier la vie, vous pouvez trouver en dessous des liens directes vers notre application via les stores. <br>

          <p><br>Bon télèchargement,<br></p>

          <p>L'équipe Pause'Reset!<br></p>
      
             </div>
        

         <div class="col-md-4" data-aos="fade-up">
          <br>
          <img src ="images/ordinateur-mabonne.jpg" alt="image ordinateur" class="img-center" width="500"><br>
         </div>
         </div>
       </div>
       </section>

<HR size=4 align=center width="100%">
           

    <section class="site-section border-bottom">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-success"></span>
              <img src="images/jemabonne_upload.png" alt="Image" class="img-fluid"></div>
              <div>
                <h3>Pause'Reset - IOS</h3>
                <p>Retrouvez notre application sous IOS dans l'Apple Store.</p>
                <p><a href="#">Télécharger</a></p>
                <div><img src="images/app-store_jemabonne.png" width="50" alt="Image" class="img-fluid"></div>
          
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-success"></span>
                <img src="images/jemabonne_upload.png" alt="Image" class="img-fluid"></div>
              <div>
                <h3>Pause'Reset - Android</h3>
                <p>Retrouvez notre application sous Android dans le Play Store.</p>
                <p><a href="#">Télécharger</a></p>
                <div><img src="images/jemabonne_googleplay.png" width="50" alt="Image" class="img-fluid"></div>
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

  <script src="js/typed.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>