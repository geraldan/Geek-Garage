<?php
 //connection a la basse de donné façon simplifier en faisant une feuille separer pour ce conetcter a la basse de donnee ici nommé pdo.php et 'require' pour apeler la page ceci est une fonction
 require ("../pdo.php");
 $pdo = (new Connection())->pdo();

//recuperation du select
$sql = $pdo->prepare("SELECT * FROM centres ");
// execute la requete
$sql->execute();
// afficher tout la table
$cats = $sql->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<?php
if(!isset($_GET['center'])) { ?>
    <body>
        <form class="centre" action="" method="GET">
            <label for="">centres :</label>
            <select name="center" required>
                        <option value="">-sélectionnez un centre-</option>
                        <?php foreach ($cats as $cat ): ?>
                            <option value="<?= $cat['nom']?>"><?= $cat['nom']?></option>
                        <?php endforeach; ?>
                    </select>
            <button type="submit">selection</button>
        </form>
    </body>
<?php 
//on recupaire l'id dans l'url
} else {

    $id = $_GET['centre'];
    
    // prepare la requete
    $pdoStat = $pdo->prepare("SELECT * FROM centres WHERE nom = $id ");
    // execute la requete
    $pdoStat->execute();
    // afficher tout la table
    $information = $pdoStat->fetch();
    ?>
    <body>
        <!-- ne pas oublier le post dans method du formulaire le post permer d'envoyer  en cacher les donnés dans la base de donner  -->
        <form id="form" action="" method="POST">
            <label for="">centre :</label>
            <input value="<?= $information[ 'nom'] ?>" name="nom" type="text" required>
            <label for="">Adresse :</label>
            <input value="<?= $information[ 'adresse'] ?>" name="adr" type="text" required>
            <label for="">longitude :</label>
            <input value="<?= $information[ 'lon'] ?>" name="lon" type="text" required>
            <label for="">latitude</label>
            <input value="<?= $information[ 'lat'] ?>" name="lat" type="text" required>
            <button type="submit">ENVOYER</button>
            
        </form>
    </body>
<?php } ?>
</html>