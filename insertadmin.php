<?php

//session_start();
include 'connect.php';

//if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $email = $_POST["email"];
    $password = $_POST["password"];
   
    $stmt = $con->prepare("INSERT INTO admin (adminemail, password )
            VALUES (?,?)");
    $stmt->execute(array($email, $password));
    $count = $stmt->rowcount();
    
   
    if ($count > 0) {
        echo '1';
        
    } else {
        echo 'Please Check your Data.....!  ';
   }
//}
?>