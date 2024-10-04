<?php 
$host = "localhost";
$user = "root";
$password = "1234";
$dbname = "loja";
$dsn = "mtsql:host=$host;dbname=$dbname;";

//cria uma constante que pode ser acessada
define("dsn", $dns);
define("user", $user);
define("password", $password);
?>