<?php  
 session_start();  
 if(isset($_SESSION["tunnus"]))  
 {  
    $_SESSION['loggedin'] = TRUE;
      header("Location:../admin.php");
 }  
 else  
 {  
      header("Location:../login.php");  
 }  
 ?> 