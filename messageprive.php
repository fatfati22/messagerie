<?php

session_start();

require('bddconfig.php');

$idGet = $_GET["id"];


// on veut les message que la personne connecté a reçu de lui
$sql = "select * from message where id_recepteur = :id_recepteur and id_expediteur = :id_expediteur";
$select = $pdo->prepare($sql);
$select->execute([
    "id_recepteur" => $_SESSION["id"],
    "id_expediteur" => $idGet
]);
$resultat = $select->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="./css/messageprive.css">

    </head>
    <body>
        <div class="place">
            <h1>فاطمة بودبوس</h1>
            <img width=400px src="./images/fatma.jpg"  alt="fatma">
        </div>
        <br>
        <br>
        <div class="bonA">
            <h1> Amar allilat:</h1>  
                <h1>mdr</h1>
        </div>
        <br>
        <br>
        <br>
        <div class="bonB">
        <h1>فاطمة بودبوس :</h1>
            <h1>hhhh    bon
            </h1>
        </div>
        <br>
        <br>
        <br>
        <br>
<br>
<br>
<div class="aaaaaaa">
<input class="msg"  type="text" placeholder="envoyer un message a Amar">

<input class="beau" type="submit" value="envoyer">
</div>



    </body>
</html>
