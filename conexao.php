<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "trabalho_web";

$mysqli = new mysqli($server, $user, $password, $database);

if ($mysqli->error){
    die("Falha ao conectar o banco de dados:" . $mysqli->error);
}
?>