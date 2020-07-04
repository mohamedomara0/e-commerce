<?php


  session_start();
        include 'connect.php';
            
            $user=$_POST["email"];
           
            $password=$_POST["password"];
            
           // $hash =  sha1($password);
            $stmt=$con->prepare("select * from admin where adminemail=? and password=? ");
            $stmt->execute(array($user,$password));
            $count = $stmt->rowcount();
            if($count > 0){ 
                $_SESSION['username']=$user;
                echo '1';
               exit(); 
               } 
                else {
             
            $user=$_POST["email"];
            $password=$_POST["password"];
            $hash =  sha1($password);
            $stmt=$con->prepare("select * from register where email=? and password=? ");
            $stmt->execute(array($user,$hash));
            $count = $stmt->rowcount();
            if($count > 0){
                $_SESSION['username']=$user;
                echo '2';
               exit(); 
                } 
                
            }
        
        
        
        
        ?>
