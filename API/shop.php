<?php
header("Content-type:text/json");
require 'config.php';

//VISAR ALLA PRODUKTER SOM FINNS

$stm_select = $pdo->prepare('SELECT `name`, `price`, `description`, `pic` FROM `products`');
$stm_select->execute([]);
$resultat = array();

foreach($stm_select as $row) {
    $result[] = $row;

}

//JSON_UNESCAPED_UNICODE används för att skriva ut ÅÄÖ
echo json_encode($result, JSON_UNESCAPED_UNICODE);
