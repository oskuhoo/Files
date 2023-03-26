<?php

include 'system/connect_db.php';

try {
    $sql = "INSERT INTO tuotteet (id, nimi, hinta, malli, kuva, kuvaus, koodi) 
            VALUES (NULL, :nimi, :hinta, :malli, :kuva, :kuvaus, :koodi)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nimi', $_REQUEST['nimi']);
    $stmt->bindParam(':hinta', $_REQUEST['hinta']);
    $stmt->bindParam(':malli', $_REQUEST['malli']);
    $stmt->bindParam(':kuva', $_REQUEST['kuva']);
    $stmt->bindParam(':kuvaus', $_REQUEST['kuvaus']);
    $stmt->bindParam(':koodi', $_REQUEST['koodi']);

    $stmt->execute();
    header("Location:admin.php");
} catch (PDOException $e) {
    die("Virhe! $sql kyselyä ei voitu tehdä " . $e->getMessage());
}
