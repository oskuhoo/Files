<?php
session_start();

include 'system/connect_db.php';

$yhteishinta = 0;
$currentQty = 1;

$action = isset($_GET['action']) ? $_GET['action'] : "";


if ($action == 'addcart' && $_SERVER['REQUEST_METHOD'] == 'POST') {
	$sql = "SELECT * FROM tuotteet WHERE koodi=:koodi";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam('koodi', $_POST['koodi']);
	$stmt->execute();
	$tuote = $stmt->fetch();


	$currentQty = $_SESSION['tuotteet'][$_POST['koodi']]['qty'] + 1;
	$_SESSION['tuotteet'][$_POST['koodi']] = array('qty' => $currentQty, 'nimi' => $tuote['nimi'], 'kuva' => $tuote['kuva'], 'hinta' => $tuote['hinta']);
	$tuote = '';
	header("Location:index.php");
}

if ($action == 'emptyall') {
	$_SESSION['tuotteet'] = array();
	header("Location:ostoskori.php");
}

if ($action == 'empty') {
	$koodi = $_GET['koodi'];
	$tuotteet = $_SESSION['tuotteet'];
	unset($tuotteet[$koodi]);
	$_SESSION['tuotteet'] = $tuotteet;
	header("Location:ostoskori.php");
}

$sql = "SELECT * FROM tuotteet";
$stmt = $conn->prepare($sql);
$stmt->execute();
$tuotteet = $stmt->fetchAll();


?>

