<?php 

// obligatoire pour utiliser les sessions
session_start();
// Obligatoire pour se connecter avec la base données (phpmyadmin)
require 'conf/config-sql.php';
//$requser = $bdd->prepare("SELECT * FROM quiz WHERE id, fullname, reply, score = ?");

 $points = 0;
if(!empty($_POST)){
 //initialisation de toutes les variables dont ont devras se servir. 
 $question1=$_POST["question1"]; 
 $question2=$_POST["question2"]; 
 $question3=$_POST["question3"]; 
 $question4=$_POST["question4"];
 $question5=$_POST["question5"]; 
  
  $answer1 = 'Pause Reset';
  $answer2 = 'Reboostant, Personnalisé'; 
  $answer3 = 'Caroline, Rayan, Eva';
  $answer4 = 'Les deux';
  $answer5 = 'Au travail';
 if ($question1 == $answer1 ) 
 {  $points ++;} 
 //question 2 
 if ($question2 == $answer2 ) 
 {  $points ++;} 
 //question 3 
 if ($question3 == $answer3 ) 
 {  $points ++;} 
 //question 4 
 if ($question4 == $answer4 ) 
 {  $points ++;} 
 //question 5 
 if ($question5 == $answer5 ) 
 {  $points ++;} 

  header('Location: quizz.php?total='.$points);

}

if(isset($_GET['total'])){

// Préparation de la requete SQL
    $res = $bdd->prepare('INSERT INTO reply (score) VALUES(:points,');
    // Affectation de valeurs aux parametres...
    // PDO::PARAM-STR est une sécurité supplémentaire pour les chaines de caractères
    // PDO::PARAM_INT est une sécurité supplémentaire pour les chiffres 
    // Si je ne renseigne pas ce PDO::PARAM_* c'est forcément PDO::PARAM_STR qui sera appliqué 

    $res->bindValue(':points',$_GET['total'],PDO::PARAM_INT);

 
    // J'execute (donc ça sauvegarde)
    $res->execute(); 
}

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
	<div class="container">
  <h1> Bravo, tu viens de découvrir l'entrée secrète de la chasse.</h1>
	<p class="lead mb-5 text-center"> Réponds correctement à ce quizz, attention tu n'auras qu'une seule chance ! <br> Toutes les réponses sont à l'intérieure du site, à toi de trouver les indices cachés ! </p>
  </div>

<form method="post">

<!-- Bloque de la 1 questions sur le quizz--> 


<div class="container">
	<div class="row">
		<div class="input-group mb-3">"Au travailntrol" type="text" placeholder=" Question 1 : Quel est le nom de notre marque ? " readonly>
		</div>
</div>
<!-- Proposition de la 1 reponse à la 1 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question1" id="Q1" value="Good Vibes">
      <label class="form-check-label" for="exampleRadios1">
        Good Vibes
      </label>
    </div>
<!-- Proposition de la 2 reponse à la 1 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question1" id="Q1" value="Pause Reset">
      <label class="form-check-label" for="exampleRadios2">
        Pause Reset
      </label>
    </div> 
<!-- Proposition de la 3 reponse à la 1 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question1" id="Q1" value="Good Reset">
      <label class="form-check-label" for="exampleRadios3">
        Good Reset
      </label>
    </div>
</div>

<br>

<!-- Bloque de la 2 questions sur le quizz--> 
<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder=" Question 2 : Quels sont les deux mots clés de notre concept ? " readonly>
		</div>
	</div>
<!-- Proposition de la 1 reponse à la 2 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question2" id="Q2" value="Energisant, Motivant" >
      <label class="form-check-label" for="exampleRadios1">
        Energisant, Motivant 
      </label>
    </div>
<!-- Proposition de la 2 reponse à la 2 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question2" id="Q2" value="Relaxant, Massage">
      <label class="form-check-label" for="exampleRadios2">
        Relaxant, Massage
      </label>
    </div> 
<!-- Proposition de la 3 reponse à la 2 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question2" id="Q2" value="Reboostant, Personnalisé">
      <label class="form-check-label" for="exampleRadios1">
        Reboostant, Personnalisé
      </label>
    </div>
</div>

<br>

<!-- Bloque de la 3 questions sur le quizz--> 

<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder=" Question 3 : Comment s'appelle les membres de la team ?" readonly>
		</div>
	</div>
  <!-- Proposition de la 1 reponse à la 3 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question3" id="Q3" value="Sylvie, Marc, Elodie">
      <label class="form-check-label" for="exampleRadios1">
        Sylvie, Marc, Elodie
      </label>
    </div>
<!-- Proposition de la 2 reponse à la 3 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question3" id="Q3" value="Caroline, Rayan, Eva">
      <label class="form-check-label" for="exampleRadios2">
        Caroline, Rayan, Eva
      </label>
    </div> 
<!-- Proposition de la 3 reponse à la 3 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question3" id="Q3" value="Mélodie, Joshua, Lucie">
      <label class="form-check-label" for="exampleRadios1">
        Mélodie, Joshua, Lucie
      </label>
    </div>
</div>

<br>

<!-- Bloque de la 4 questions sur le quizz--> 
<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder=" Question 4 : L'application sera disponible sur quel plateforme de télèchargement ? " readonly>
		</div>
	</div>
  <!-- Proposition de la 1 reponse à la 4 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question4" id="Q4" value="IOS">
      <label class="form-check-label" for="exampleRadios1">
        IOS
      </label>
    </div>
<!-- Proposition de la 2 reponse à la 4 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question4" id="Q4" value="Android">
      <label class="form-check-label" for="exampleRadios2">
        Android
      </label>
    </div> 
<!-- Proposition de la 3 reponse à la 4 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question4" id="Q4" value="Les deux">
      <label class="form-check-label" for="exampleRadios1">
        Les deux 
      </label>
    </div>
</div>

<br>



<!-- Bloque de la 5 questions sur le quizz--> 
<div class="container">
	<div class="row">
		<div class="input-group mb-3">
			<input class="form-control" type="text" placeholder=" Question 5 : Comment c'est connu la team ? " readonly>
		</div>
	</div>
    <!-- Proposition de la 1 reponse à la 5 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question5" id="Q5" value="Au travail">
      <label class="form-check-label" for="exampleRadios1">
        Au travail 
      </label>
    </div>
<!-- Proposition de la 2 reponse à la 5 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question5" id="Q5" value="gamma">
      <label class="form-check-label" for="exampleRadios2">
        De la même famille
      </label>
    </div> 
<!-- Proposition de la 3 reponse à la 5 question-->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="question5" id="Q5" value="ampla">
      <label class="form-check-label" for="exampleRadios1">
        Un projet innovant, co-working
      </label>
    </div>
</div>

<br>

  <!-- Button trigger modal -->
  <div class='container'>
<button class="btn btn-success btn-md text-white"> Envoyer</a>
  </div>

</div>
</form>

<br></br>
</section>


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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="js/main.js"></script>



  <?php if(isset($_GET['total'])): ?>

    <?php 

    if($_GET['total'] < 5){
      $modal_title = 'Oups';
      $modal_message = 'Dommage';
      $modal_type = 'error'; // error, success ou info uniquement
    }
    else {
      $modal_title = 'Bravo';
      $modal_message = 'Youhou vous avez '.$_GET['total'].' points';
      $modal_type = 'success'; // error, success ou info uniquement
    }


    ?>
    <script type="text/javascript">

      swal('<?php echo $modal_title;?>', '<?php echo $modal_message;?>', '<?php echo $modal_type;?>');
    </script>

  <?php endif; ?>
    
  </body>
</html>