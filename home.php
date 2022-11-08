<?php

session_start();

if(!isset($_SESSION["id"])) {
    header("Location: index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <div class="home">
        <h1>Bienvenue <?= $_SESSION["pseudo"]?></h1>
        <img class="imghome" src="./images/<?= $_SESSION["avatar"]?>" alt="fff">
    </div>
    <aside id="aside"></aside>
    <a href="deconnexion.php">Déconnexion</a>
    <script src="home.js"></script>
</body>
</html>