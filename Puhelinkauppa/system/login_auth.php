<?php

include 'connect_db.php';
session_start();

try {
    $sql = "SELECT * FROM users WHERE tunnus = :tunnus AND salasana = :salasana";
    $stmt = $conn->prepare($sql);
    $stmt->execute(
        array(
            'tunnus'     =>     $_POST["tunnus"],
            'salasana'     =>     $_POST["salasana"]
        )
    );
    $_SESSION['loggedin'] = FALSE;
    $count = $stmt->rowCount();
    if ($count > 0) {
        $_SESSION['tunnus'] = $_POST['tunnus'];
        header("Location:login_success.php");
    } else {
        header("Location:../login.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
