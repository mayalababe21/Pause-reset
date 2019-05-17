<?php 

// obligatoire pour utiliser les sessions
session_start();
use PHPMailer\PHPMailer\PHPMailer; // il ne faut pas les toucher, compatible a phpmailer 
use PHPMailer\PHPMailer\Exception; // Lien/chemin fictif

require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



$errors= array(); // c'est un tableau, ce type de variable, prépares toi à recevoir des erreurs 

if(!empty($_POST)){  // Empty veut dire "vide" // Est-ce que quelque chose à était envoyé a la méthode post, lorsque l'utilisateur à soumis le formulaire. Condition que le formulaire à bien était envoyée via la méthode post. 

  // Sécurité : retirer toutes les balises HTML & PHP (strip_tags) et retirer les espaces en début et fin de chaînes saisies par l'nternaute (trim)
  // Foreach est une boucle qui va parcourir chaque élèment d'un tableau; ici $_POST
  // A l'aide de cette boucle je parcours l'ensemble des champs et les nettoies (a l'aide de trim et de strip_tags). Je recrée une variable $post qui comportera les mêmes données mais nettoyées de leurs caractères superflus (et surtout sécurisées). 
  // J'effectuerais donc mes vérifications sur la variable $post
  foreach ($_POST as $key => $value){
    $post[$key] = trim(strip_tags($value));
  }
  // Si le champ Nom est vide alors je rajoute une erreur dans la variable $errors
  if(empty($post['input_nom'])){
    $errors[] = 'Votre nom doit être complété';  //[] va me rajouter une entrée 
  }
  // Si le champ email est vide 
  if(empty($post['input_email'])){
    // Ajout d'une erreur
    $errors[] = 'Votre adresse mail doit être complété';
  }
  // Ou sinon on vérifie la syntaxe de l'adresse email
  elseif (!filter_var($post['input_email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = "Votre adresse mail est invalide";
  }
  // Si le champ objet est vide, alors erreur 
  if(empty($post['input_objet'])){
    $errors[] = 'L\'objet de votre message doit être complété';
  }

  // Encore une fois pour le message 
  if(empty($post['input_message'])){
    $errors[] = 'Le message doit être complété';
  }
  // count($errors) ca compter le nombre de ligne dans le tableau $errors
  // Les erreurs ne se rajoutent que si les vérifications sont KO 
  // Si je n'ai pas d'erreur (égal à zéro donc), ben j'envoie mon mail 
  if(count($errors) === 0){ // Si il n'y a pas d'erreurs alors le formulaire est valide/valider 
    $formValid = true; 

    $mail = new PHPMailer(true);
    //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail ->CharSet = 'uft-8';                            // Pour prendre en compte les accents
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = '134fdecc07f8a5';                   // SMTP username
      $mail->Password = '177b2309e8257c';                   // SMTP password
      $mail->SMTPSecure =   'tls';                        // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 2525;                                     // TCP port to connect to

      //Recipients
      $mail->setFrom($post['input_email'], $post['input_nom']);     // L'expéditeur
      $mail->addAddress('pausereset@gmail.com');               // Le destinataire 
      
       //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Message du site: '.$post['input_objet'];
    
      $message = '<p>Bonjour,';
      $message.= '<br>Vous avez eu un nouveau message via votre formulaire: </p>';
      $message.= '<hr>';
      $message.= nl2br($post['input_message']);   // nl2br prend en compte les sauts de lignes 
      $message.= '<hr>';            // Pas mettres d'espace entre le . et = 
      $message.= '<p><em>Vous pouvez répondre directement à cet email</em></p>'; // $message.= pour l'indentation 


      

      $mail->msgHTML($message);
      $mail->send();
    
  
  }
  else {
    $formValid = false; // 

  }
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
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/contact-image.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Contactez nous</h1>
                <p class="lead mb-5">we makes beautiful</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section bg-light">
      <div class="container">
       

        <?php
  // Si la variable $formValid existe et que sa valeur est a TRUE
         if (isset($formValid) && $formValid == true): ?>
          <p style="color:green">Votre message a bien été envoyé, nous vous répondrons bientôt. </p>
        <?php elseif (isset($formValid) && $formValid == false): ?> 
          <p style="color:red"><?php echo implode('<br>', $errors);?></p>
        <?php endif;?>

        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form method="post" action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Formulaire de contact</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nom</label>
                  <input type="text" id="fname" name="input_nom" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Prénom</label>
                  <input type="text" id="lname"  class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="input_email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Sujet</label> 
                  <input type="subject" name="input_objet" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="input_message" id="message" cols="30" rows="7" class="form-control" placeholder="Ecris-ton message ici..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Envoyé mon formulaire" class="btn btn-success btn-md text-white">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-3 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Notre adresse</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Téléphone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Adresse Email</p>
              <p class="mb-0"><a href="#">contact@pausereset.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-success btn-md text-white">Lire plus</a></p>
            </div>

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