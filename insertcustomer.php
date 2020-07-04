<?php

//session_start();
include 'connect.php';

//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["fname"];
    $lname= $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $hash = sha1($password);
    $stmt = $con->prepare("INSERT INTO register (firstname, lastname, email,phone, password)
            VALUES (?,?,?,?,?)");
    $stmt->execute(array( $fname, $lname,$email, $phone,$hash));
    $count = $stmt->rowcount();
   
    if ($count > 0) {
        echo '1';
        
    } else {
        echo 'Please Check your Data.....!  ';
   }
//}
?>