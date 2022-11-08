<?php

session_start();

require('bddconfig.php');

$sql = "select * from utilisateur where not id = :id order by pseudo";
$select = $pdo->prepare($sql);
$select->execute(["id" => $_SESSION["id"]]);
$resultat = $select->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultat);