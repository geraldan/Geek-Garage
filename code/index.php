<?php ?>
<!--

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
/* Exception class. */
require 'PHPMailer/src/Exception.php';
/* The main PHPMailer class. */
require 'PHPMailer/src/PHPMailer.php';
/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer/src/SMTP.php';
 
$mail = new PHPMailer(TRUE);
 
if(isset($_POST['name'])){
    try {
        /* Set the mail sender. */
        $mail->setFrom('gerald@portfolio.com', $_POST["name"] . " " . $_POST["first_name"] );
        /* Set the mail resever. */
        $mail->addAddress('');  
        /* Set the subject. */
        $mail->Subject = $_POST['objet'] ; // le sujet
        /* Set the mail message body. */
        $mail->Body = "le message : " . $_POST["message"] . " Le mail : " . $_POST["mail"];
 
        /* Enable SMTP debug output. */
        $mail->SMTPDebug = 0; // 2
 
        /* SMTP parameters. */
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // host localhost
        $mail->SMTPAuth = TRUE; // TRUE false
        $mail->SMTPSecure = 'tls'; // ssl
        $mail->Username = ''; //  mail adresse
        $mail->Password = '';  // password
        $mail->Port = 587; // port 587
 
        /* Disable some SSL checks. */
        $mail->SMTPOptions = array(
           'ssl' => array(
           'verify_peer' => false,
           'verify_peer_name' => false,
           'allow_self_signed' => true
           )
        );
 
        /* Finally send the mail. */
        $mail->send();
        $send = "<h4 class=\"send\">Votre message a bien été envoyer</h4>";
        }
        catch (\Exception $e){
            /* PHP exception (note the backslash to select the global namespace Exception class). */
            echo $e->getMessage();
        }
    }
:
?>
-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Geek Garage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
    <script src="action.js"></script>
</head>
<body>
    <nav>
        <button id="btn_1">Qui nous somme</button>
        <button id="btn_2">Préstation</button>
        <button id="btn_3">où nous trouver</button>
        <button id="btn_4">Contact</button>
    </nav>
        <div class="geek">
            <img src="ilustration.jpg" alt="">
        </div>
                                                <!--bio-->
    <div>
        <div id="qui"></div>
        <h2>QUI SOMME NOUS</h2>
        <P>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor</P>
                                                <!--service-->
        <H2 id="prestations">PRESTATIONS</H2>
        <div class="ilustration">
            <div class="prestation">
                <P>DIAGNOSTIC</P>
                <P>INSTALATION SOFTWARE</P>
                <p>MAINTENANCE</p>
                <p>REMASTER</p>
            </div>
            <img src="reparateur.png" alt="">
        </div>
                                                <!--map-->
        <h2 id="trouver">OU NOUS TROUVER</h2>
        <div class="map">
            <div id="map"></div>
            <div id="gray">
                <h3>GRAY : 1 Rue Gambetta, 70100 Gray</h3>
                <h4>Horaire</h4>
                <p>lundi à vendredi 08:30–12:00, 13:30–17:00</p>
                <p>samedi et dimanche Fermé</p>
                <p>Téléphone : 03 84 76 90 83</p>
            </div>
            <div id="vienne">
                <h3>VIENNE : Immeuble Apollo, 30 Avenue Général Leclerc, 38200 Vienne </h3>
                <h4>Horaire</h4>
                <p>lundi à vendredi 08:30–12:00, 13:30–17:00</p>
                <p>samedi et dimanche Fermé</p>
                <p>Téléphone : 03 84 76 52 44</p>
            </div>
            <div id="beynost">
                <h3>BEYNOST : 110 Rue du Chat Botté, 01700 Beynost</h3>
                <h4>Horaire</h4>
                <p>lundi à vendredi 08:30–12:00, 13:30–17:00</p>
                <p>samedi et dimanche Fermé</p>
                <p>Téléphone : 03 84 76 52 44</p>
            </div>
        </div>
        
        
        
        <h2 id="contact">CONTACT</h2>


         <div class="button_container">
            <button id="button_modal">Nous Contacter</button>
        </div> 
                                                <!--form-->
        <div class="send"></div>
        <div  class="forme" id="boxForm">
        <!-- ne pas oublier le post dans method du formulaire le post permer d'envoyer  en cacher les donnés dans la base de donner en cacher -->
            <form id="form" action="" method="POST">
                <label for="">Nom Prénom :</label>
                <input  name="nom" type="text" required>
                <label for="">Adresse Mail :</label>
                <input name="mail" type="text" required>
                <label for="center">Centre</label>
                <select name="center" required>
                    <option value="">-sélectionnez un centre-</option>
                    <option value="gray">Gray</option>
                    <option value="vienne">Vienne</option>
                    <option value="beynost">Beynost</option>
                </select>
                <label  name="objet" for="">Objet :</label>
                <input name="objet" type="text" required>
                <label for="">Message :</label>
                <textarea name="area" id="" cols="30" rows="10"></textarea>
                <button type="submit">ENVOYER</button>
                
            </form>
            -->
        </div>
    </div>
</body>
</html>