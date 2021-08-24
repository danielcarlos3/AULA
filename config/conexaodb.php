<?php
require_once 'config.php';

$erro404 = "./pages/erroconexao";
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die(header("Location: $erro404.php"));
}

?>