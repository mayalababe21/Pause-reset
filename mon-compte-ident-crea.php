<?php 

// ajout rayan début 
use PHPMailer\PHPMailer\PHPMailer; // il ne faut pas les toucher, compatible a phpmailer 
use PHPMailer\PHPMailer\Exception; // Lien/chemin fictif
// ajout rayan début 



require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// obligatoire pour utiliser les sessions
session_start();
// Obligatoire pour se connecter avec la base données (phpmyadmin)
require 'conf/config-sql.php';


if(!empty($_POST)){
    $errors = array();
    $errors_connect = array();

    // Nettoyage des données pour sécuriser le tout 
    foreach($_POST as $key => $value){
        $post[$key] = trim(strip_tags($value));
    }


    // Traiter chacun des 3 formulaires de manière séparée, pour cela j'ai ajouté un champ caché ayant pour name "action"

    // Traitement de l'inscription
    if($post['action'] === 'signup'){

        if(strlen($post['input_fullname']) < 5){
            $errors[] = 'Votre nom et prénom doit comporter au moins 5 caractères';
        }
        
        if(!filter_var($post['input_email'], FILTER_VALIDATE_EMAIL)){
            $errors[] = 'Votre adresse email est invalide';
        }

        if(strlen($post['input_password']) < 8){
            $errors[] = 'Votre mot de passe doit comporter au moins 8 caractères';
        }
        elseif($post['input_password'] != $post['input_password']){
            $errors[] = 'Votre mot de passe et sa confirmation ne correspondent pas';
        }

        // On a aucune erreur, on sauvegarde en base de données
        if(count($errors) === 0){

            $sql = 'INSERT INTO users (fullname, email, password) VALUES(:param_fullname, :param_email, :param_password)';

            $res = $bdd->prepare($sql);
            $res->bindValue(':param_fullname', $post['input_fullname']);
            $res->bindValue(':param_email', $post['input_email']);
            $res->bindValue(':param_password', password_hash($post['input_email'], PASSWORD_DEFAULT));

            if($res->execute()){

                // Si on veut envoyer un mail de confirmation, c'est ici qu'on le fera.
                // Néanmoins, cela nécessite de rajouter une colonne ("is_active" par exemple) dans la base de données (0-1)
                // Si l'utilisateur clique sur son lien, l'emmenant sur une page spécifique, alors on update le compte en passant la nouvelle colonne a 1.

            // Récupération des variables nécessaires au mail de confirmation  
             
            // ajout rayan début  

            $mail = $_POST['input_email']; 

        

            $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail ->CharSet = 'UTF-8';                            // Pour prendre en compte les accents
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '5c06005dde8434';                   // SMTP username
        $mail->Password = '8beb459b799cd4';                   // SMTP password
        $mail->SMTPSecure =     'tls';                        // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 2525;                                     // TCP port to connect to

        //Recipients
        $mail->setFrom($post['input_email'], $post['input_fullname']);         // L'expéditeur
        $mail->addAddress('ellen@example.com');               // Le destinataire 
        
         //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Bienvenue sur Pause\'Reset'.$post['input_fullname'];
      
        $message = '<p>Hey!,';
        $message.= '<br> Pour activer votre compte, veuillez cliquer sur le lien ci dessous
            ou copier/coller dans votre navigateur internet : LE LIEN DE NOTRE SITE </p>';
        $message.= '<hr>';
        $message.= '<hr>';                      // Pas mettres d'espace entre le . et = 
        $message.= '<p><em>Ceci est un mail automatique, Merci de ne pas y répondre.</em></p>'; // $message.= pour l'indentation 


        

        $mail->msgHTML($message);
        $mail->send();

        // ajout rayan fin

            }
        }

    }
    // Traitement du formulaire de connexion
    elseif($post['action'] === 'signin'){

        if(empty($post['login_email'])){
            $errors[] = 'Vous devez saisir une adresse email';
        }
        if(!filter_var($post['login_email'], FILTER_VALIDATE_EMAIL)){
            $errors[] = 'Votre adresse email est invalide';
        }
        if(empty($post['login_password'])){
            $errors[] = 'Vous devez saisir un mot de passe';
        }

        // Si je n'ai pas d'erreurs
        if(count($errors) === 0){
            $sql = 'SELECT * FROM users WHERE email = :email_param LIMIT 1';
            $res = $bdd->prepare($sql);

            $res->bindValue(':email_param', $post['login_email']);

            $res->execute();

            $user_found = $res->fetch(); // la variable $user_found contiendra les infos de l'utilisateur de la base de données

            if(empty($user_found)){
                // Aucun email trouvé, donc pas d'utilisateur, de compte
                header('Location: index.php'); // on redirige vers la page d'accueil
            }
            else {
                // Ici j'ai un utilisateur donc je vérifie son mot de passe (etc)

                if(!password_verify($post['login_password'], $user_found['password'])){
                    $errors_connect[] = 'Le mot de passe est invalide';
                }
                else {
                    $_SESSION['user'] = [
                        'id'        => $user_found['id'],
                        'fullname'  => $user_found['fullname'],
                    ];

                    /** 
                    # Exemple
                    <p>Bonjour <?php echo $_SESSION['user']['fullname'];?></p> 
                    **/

                    header('Location: index-log.php'); // on redirige vers la page d'accueil connecté

                }
            }
        }

    }
    // Traitement du formulaire de mot de passe oublié
    elseif($post['action'] === 'reset_password'){

    }

}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-log.css">
    <title>Pause'Reset - Je m'identifie ou Je crée Mon Compte</title>
</head>
<body>
    <div id="logreg-forms">

        <?php 
        if(isset($errors) && count($errors) > 0){
            echo '<p class="text-danger">'.implode('<br>', $errors).'</p>';
        }
        if(isset($errors_connect) && count($errors_connect) > 0){
            echo '<p class="text-danger">'.implode('<br>', $errors).'</p>';
        }
        ?>

        <!-- Formulaire de connexion -->
        <form method="post" class="form-signin">
            <input type="hidden" name="action" value="signin">


            <h1 class="h3 mb-3 font-weight-normal text-center"> Je m'identifie</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> avec Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> avec Google+</span> </button>
            </div>
            <p class="text-center"> OU  </p>

            <input type="email" name="login_email" id="inputEmail" class="form-control" placeholder="Mon adresse email" required>
            <input type="password" name="login_password" id="inputPassword" class="form-control" placeholder="Password" required>
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Je valide</button>
            <a href="#" id="forgot_pswd">Mot de Passe oublié ?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Je crée Mon Compte</button>
        </form>

        <!-- Formulaire de réinitialisation de mot de passe -->
        <form method="post" class="form-reset">
            <input type="hidden" name="action" value="reset_password">

            <input type="email" id="resetEmail" class="form-control" placeholder="Mon adresse email" required="" autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Réinitialiser mon Mot de Passe</button>
            <a href="index.php" id="cancel_reset"><i class="fas fa-angle-left"></i> Retour</a>
        </form>
        

        <!-- Formulaire d'inscription -->
        <form method="post"  class="form-signup">
            <input type="hidden" name="action" value="signup">
            
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> avec Facebook</span> </button>
            </div>
            <div class="social-login">
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> avec Google+</span> </button>
            </div>
            
            <p class="text-center">OU</p>

            <input type="text" name="input_fullname" id="user-name" class="form-control" placeholder="Prénom NOM" required>
            <input type="email" name="input_email" id="user-email" class="form-control" placeholder="Mon adresse email" required>
            <input type="password" name="input_password" id="user-pass" class="form-control" placeholder="Mot de Passe" required>
            <input type="password" name="input_password_conf"id="user-repeatpass" class="form-control" placeholder="Confirmer Mot de Passe" required>

            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Je valide la création de Mon Compte</button>
            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Retour (j'ai déjà un compte)</a>
        </form>
        <br>
            
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script-log.js"></script>
</body>
</html>