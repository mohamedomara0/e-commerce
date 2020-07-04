<?php


include 'connect.php';

$id = $_GET["id"];
$stmt = $con->prepare("delete from product_constructions where id=?");
$stmt->execute(array($id));
$count = $stmt->rowcount();
if ($count > 0) {
    header("location: deleteproduct.php");
} else {
    echo 'this member not deleted';
}