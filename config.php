<?php

$host = "localhost";
$user = "root";
$senha = "";
$database = "system_carros";

$mysqli = new mysqli($host, $user, $senha, $database);

if($mysqli->connect_errno){

    echo "Erro";
} 

?>