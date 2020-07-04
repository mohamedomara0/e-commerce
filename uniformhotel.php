<!DOCTYPE html>
<?php

mysql_connect("localhost", "root", "");
mysql_select_db("uniform_system");
session_start();
//$e=$_SESSION['username'];
//$sup = $_POST["sup"];
$res = mysql_query("SELECT * from product_hotel");


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
                    .borderborder-success{
                border:1pt solid gray;
                clear: both;
                text-align: center;
                  width: 33%;
                display: inline-block;
                
                
            }
            .btn btn-primary{
                background-color:#e29406;  
                border: 2px solid #d1c286;
            }
             .form-control {
    box-shadow: none;
    background: transparent;
    border: 2px solid rgba(0, 0, 0, 0.1);
    height: 54px;
    font-size: 18px;
    font-weight: 300;
                }
                .btn-primary {
    background: #e29406;
    color: #fff;
    border: 2px solid #d1c286
                }
                .btn-primary:hover{
                 background-color:#d1c286;;
                 transition: all .8s ease-in-out;
                 opacity: .8;
                 border: 2px solid #d1c286
            }
            .btn-primary:after{
                 background-color:#d1c286;;
                 transition: all .8s ease-in-out;
                 opacity: .8;
                 border: 2px solid #d1c286
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
            <div class="collapse navbar-collapse"style="">
                <ul class="nav navbar-nav navbar-right" >
                    <li ><a  href="home.php">Home</a></li>
                    <li ><a  href="clothes.php">Clothes</a></li>
                     <li ><a  href="cart.php">Cart</a></li>
                      <li ><a  href="payment.php">Payment</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                    
                    <li><a href="login.php">Login</a></li>
                     <li><a href="login.php">Logout</a></li>

                    
                </ul>
            </div>
            
        </div>
    </header><!--/header-->
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/bg9.jpg);background-repeat: no-repeat;background-size: 100% 100%; padding: 30%;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						
					</div>
				</div>
			</div>
		</div>
	</header>
        <div class="main-w3pvt man-content-wthree text-center" id="home" style="background-color: white">

     <div class="display-tc animate-box" data-animate-effect="fadeIn" align="center" style="padding-top: 0%;padding-bottom: 3%;margin-top: 0%; ">
         <h1 style="padding-top: 3%; color: #121244">Uniforms of Hotel</h1>						
	</div>
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
			</div>
			<div class="row">
                         <div class="product">
 <?php
                                            while ($row = mysql_fetch_array($res)) {
                                                echo '<div class="borderborder-success">';
     
    echo '<div class="border border-success"  style="margin-bottom: 10px; padding: 10px 10px 10px 0px;">';
   echo '<span class="">'.$row["name"].'</span><br>';
    echo '                        
        <img src="data:image/jpeg;base64,' . base64_encode($row['photo']) . ' " width ="250" height="250"  >
         <br>';
    echo '<div class="desc">';
    echo '<p>'.$row["discription"].'</p>';
    echo '<span class = "price">$'.$row["price"].'</span><br>';
     echo " <a class='btn btn-primary' href='addtocart.php?id=".$row["id"]. "' role='button'>Add to cart</a>";
    echo '</div>';
    echo '</div>';
     echo '</div>';
}
      ?>  
  	                              
	</div>
	</div>
        </div>
        </div>
        </div>
        </div>
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


