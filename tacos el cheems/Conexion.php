<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
//Verificar si el formulario fue enviado por POST

if ($_SERVER["REQUES_METHOD"] == "POST") {
$servername = "sql206.infinityfree.com";
$username = "if0_38917770";
$password = "FincjGrTUMlghN";
$dbname = "if0_38917770_alfredo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("conexion fallida:" . $conn->connect_error);
}
}