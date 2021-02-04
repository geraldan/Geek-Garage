<?php

if(isset($_POST['nom'])) {

    //connection a la basse de donné façon simplifier en faisant une feuille separer pour ce conetcter a la basse de donnee ici nommé pdo.php et 'require' pour apeler la page ceci est une fonction
    require ("../pdo.php");
    $pdo = (new Connection())->pdo();

    $name = $_POST['nom'];
    $adr = $_POST['adresse'];
    $lon = $_POST['lon'];
    $lat = $_POST['lat'];

    // inserer dans la table
    $sql = " INSERT INTO centres (nom, adresse, lon, lat )
    VALUES
    ('$name', '$adr', '$lon', '$lat')";

    //execution de la requete
    $pdo->exec($sql);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
     <!-- ne pas oublier le post dans method du formulaire le post permer d'envoyer  en cacher les donnés dans la base de donner en cacher -->
            <form id="form" action="" method="POST">
                <label for="">centre :</label>
                <input name="nom" type="text" required>
                <label for="">Adresse :</label>
                <input name="adresse" type="text" required>
                <label for="">longitude :</label>
                <input name="lon" type="text" required>
                <label for="">latitude</label>
                <input name="lat" type="text" required>
                <button type="submit">ENVOYER</button>
                
            </form>
</body>
</html>
       