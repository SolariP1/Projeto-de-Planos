<?php
$severname = "localhost";
$database = "longa_vida";
$username = "root";
$password = "";

$conn = mysqli_connect($severname, $username, $password, $database);

if (!$conn) {
    die("Conexão Falhou:" . mysqli_connect_error());
}
?>