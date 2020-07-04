<?php


session_start();

mysql_connect("localhost","root", "");
    mysql_select_db("uniform_system");
    //$email=$_SESSION["username"];
   // echo $email;
     $name=$_POST["name"];
      $price=$_POST["price"];
       $disc=$_POST["disc"];
       $catgory=$_POST["catgory"];
    $filename=$_FILES['image']['name'];
    
    $tmpname[]=$_FILES['image']['tmp_name'];
   
    $filetype=$_FILES['image']['type'];
   // $name=addslashes( $filename);
    
for($i=0;$i<=count($tmpname)-1;$i++){  
        $tmp=addslashes(file_get_contents($tmpname[$i])); 
        mysql_query("INSERT INTO product_school (  photo , name ,price , discription,catgory)"
                . "VALUES('$tmp','$name',' $price',' $disc','$catgory')");
      
      
}


?>
   
   
   