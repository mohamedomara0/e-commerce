<?php

//session_start();
include 'connect.php';
session_start();

//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_GET["id"];
    
    $stmt = $con->prepare("INSERT INTO orderd (ids, username )
            VALUES (?,?)");
    $stmt->execute(array($id, $_SESSION["username"]));
    $count = $stmt->rowcount();
    
   
    if ($count > 0) {
        $stmt = $con->prepare("delete from cart where ids=?");
$stmt->execute(array($id));
        header("location: cart.php");
        
    } else {
        echo 'Please Check your Data.....!  ';
   }
//}
?>