<?php

/*$servername = "localhost";
$username = "cesarbaz_bazan";
$password = "bazan_190789";
$dbname = "cesarbaz_agenciaaem";*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canadir";



$con = new mysqli($servername, $username, $password, $dbname);
$con ->query("SET NAMES 'utf8'");

if ($con->connect_error) {
    die("Fallo la Conexion: " . $con->connect_error);
} 
?>