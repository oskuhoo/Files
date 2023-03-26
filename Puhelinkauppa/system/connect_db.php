<?php 

// Arvot voisi laittaa toiseen tiedostoon, ettei ne ole näkyvissä koodissa.
$servername = "localhost";
$username = "root";
$password = "";
$database = "puhelinkauppa";

try {
	$conn = new PDO("mysql:host={$servername};dbname={$database}", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	$e->getMessage();
}


?>