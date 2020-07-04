<!DOCTYPE html>
<?php


include 'connect.php';

            $stmt = $con->prepare("select * from register " );
            $stmt->execute();
            $rows = $stmt->fetchAll();
            $stmt1 = $con->prepare("select * from admin " );
            $stmt1->execute();
            $rows1 = $stmt1->fetchAll();
            


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>uniform system</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

    <style>
            .stat {
                background-color:#dc3545;
                border-color: #dc3545;
                border-radius: .25rem;
               transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
               border: 1px solid transparent;  
                line-height: 1.5;
                padding:  .80rem;
                margin:20px;
                font-size: 30px;
                text-align: center;
                vertical-align: middle;
                cursor: pointer;  
                box-shadow: 10px 10px grey;
                transition: all 1s ease-in-out;
                
                
            }
            
            
            .stat:hover{
                  background-color:#A30B0F  ;
                  opacity: .9;
                    transition: all .8s ease-in-out;
            }
            

            
            .t-member{
                background-color:#3498db  !important;
            }
            
            .t-member:hover{
                 background-color:#000775   !important;
                 transition: all .8s ease-in-out;
                 opacity: .8;
            }


.text-center
{
    color:#000;
}
                .dash{
                    padding: 1.5%;
                    
                }
        </style>
</head><!--/head-->
<body>
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top " role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                 <a class="navbar-brand" href="index.php"><h1><span class="pe-7s-gleam bounce-in"></span> uniform system</h1></a>
            </div>
            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav navbar-right" >
                    <li style="margin-right:525px; padding-top: -2px; margin-bottom: -25px;"><a href="adminpage.php">Home</a></li>
                   

                    
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <div class="main-w3pvt man-content-wthree text-center" id="home" style="background-color: white">
        <div class="container">

            <div class="style-banner mx-auto">
                
                 <div class="container home-stats text-center"></div>
                    <div class="style-banner mx-auto">
                
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr style="background-color: black; color: white">
                 <h1 class="text-center" > Manage admins  </h1>
                <td >#ID</td>
                <td>admin email</td>
                
            </tr>
            <?php
                foreach ($rows1 as $row) {
                    echo "<tr>"; 
                         echo "<td>" .$row["id"] ."</td>" ;
                         echo "<td>" .$row["adminemail"] ."</td>" ;
                        
                         echo "<td> <a href='deleteadmin.php?id=".$row['id']."'class='btn btn-danger'> Delete </a>";
                         echo "</td>";   
                    echo "</tr>";
                  }
                
                ?>
            
<div class="container">
    <div class="table-responsive">
        
        <table class="main-table text-center table table-bordered">
            <tr style="background-color: black; color: white">
            <h1 class="text-center" style="margin-left:-3%;"> Manage users </h1>
                <td >#ID</td>
                <td>first name</td>
                <td>last name</td>
                <td>email</td>
                <td>phone</td>
            </tr>
                <?php
                foreach ($rows as $row) {
                    echo "<tr>"; 
                         echo "<td>" .$row["id"] ."</td>" ;
                         echo "<td>" .$row["firstname"] ."</td>" ;
                         echo "<td>" .$row["lastname"] ."</td>" ;
                         echo "<td>" .$row["email"] ."</td>" ;
                         echo "<td>" .$row["phone"] ."</td>" ;
                         echo "<td> <a href='deletemember.php?id=".$row['id']."'class='btn btn-danger'> Delete </a>";
                         echo "</td>";   
                    echo "</tr>";
                  }
                
                ?>
            
        </table>
        
    </div>
</div>
            
            </div>
        </div></div>
            </div></div></div>
        
         
          
  
   <footer id="footer" class="" >
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-4" style=" float: right;">
                        <ul class="pull-right">
                            <li><a  id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
   
   
      
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/init.js"></script>
</body>
</html>
