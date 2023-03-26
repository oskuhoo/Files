<?php 
include 'system/connect_db.php';

$id = $_GET['id'];

try {
    $sql = "DELETE FROM tuotteet WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Tuote poistettu";
    header("Location:admin.php");
    
} catch (PDOException $e) {
    die("Virhe! $sql kyselyä ei voitu tehdä " . $e->getMessage());
}

?>