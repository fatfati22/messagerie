<?php

require('bddconfig.php');

$sql = "select * from utilisateur";
$select = $pdo->prepare($sql);
$select->execute();
$resultat = $select->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultat);