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
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/image-entree-secrete.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>L'entrée secrète de la chasse est ouverte ! </h1>
                <p class="lead mb-5">Répondez correctement aux plusieurs questions, bonne chance.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

<section id="quizz-entree-secrete">
	<h1> Bravo, tu viens de découvrir l'entrée secrète de la chasse.</h1>
	<p class="lead mb-5"> Réponds correctement à ce quizz, attention tu n'auras qu'une seule chance ! Toutes les réponses sont à l'intérieur du site, à toi de trouver les indices cachés ! </p>


<form>

<div class="container">
<div class="row">
    <div class="input-group col-sm-4 mb-3">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-descridedby="emailHelp" placeholder="Inséres ton email">
</div>    
</div>

<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder="Quels sont les trois mots clés de notre concept ? " readonly>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder="Quels sont les trois mots clés de notre concept ? " readonly>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder="Quels sont les trois mots clés de notre concept ? " readonly>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder="Quels sont les trois mots clés de notre concept ? " readonly>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder="Quels sont les trois mots clés de notre concept ? " readonly>
		</div>
	</div>
</div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        J'accepte de recevoir des Newletters pour m'informer des évènements à venir, challenges...
      </label>
    </div>
  </div>
    <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        J'accepte les conditions génèrales des challenges et de la politique de confidentilité
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" >Envoyer</button>
</form>

<br></br>
</section>
</body>


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