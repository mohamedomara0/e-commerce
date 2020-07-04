<?php

//session_start();
include 'connect.php';

//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $job = $_POST["job"];
    $comments = $_POST["comments"];
   
    $stmt = $con->prepare("INSERT INTO contact_us (username,email,job,comment)
            VALUES (?,?,?,?)");
    $stmt->execute(array($fname, $email, $job, $comments));
    $count = $stmt->rowcount();
    
   
    if ($count > 0) {
        echo '1';
        
    } else {
        echo 'Please Check your Data.....!  ';
   }
//}
?>