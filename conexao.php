<?php
$host = "localhost";
$user = "root";
$senha = "";
$dbnome = "Escola";

$pdo = new PDO("mysql:dbname=$dbnome;host=".$host, $user, $senha);

?>