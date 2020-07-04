<!DOCTYPE html>
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
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li style="margin-left: -135%;"><a  href="index.php">Home</a></li>
                    <li style="margin-left: 30%;"><a href="login.php">Login</a></li>
                   <li><a href="login.php">Logout</a></li>


                    
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="main-slider" class="no-margin" style="background-color: white">
         <div class="container home-stats text-center pb-4">
             <h1 class="alert alert-success dash " style="background-color: #bdd4b4">Manage Products and Users</h1>

                </div>
                
                   
                   
                       <div class="col-md-3 "style=" padding-right: 10%;width:50%">
                           <div class="form-group wow bounceInRight" data-wow-delay="550ms"   >
                           	 <a href="addcatagoryofproduct.php" style="color: white;  direction: none;"> 
                               <div  class="stat t-member" style="  background-color:#b57f22  !important;  border-color:#3498db  !important;width: 50%;margin-left: 65%;margin-top: 15%; padding-bottom: 5%;text-align: center;  " > Add product <br>
                               </a>
                            </div>
                            <a href="addadmin.php" style="color: white;  direction: none;">
                               <div  class="stat t-member" style="  background-color:#b57f22  !important;  border-color:#3498db  !important;width: 50%;margin-left: 65%;margin-top:5%; padding-bottom: 5%;text-align: center " > Add Admin <br>
                               </a>
                            </div>
<br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                    
                       <div class="col-md-3 "style=" padding-right: 10%;width:50%">
                           <div class="form-group wow bounceInRight" data-wow-delay="550ms"  >
                           	 <a href="deleteproduct.php" style="color: white; direction: none;">
                               <div class="stat st-member" style="background-color:#d09d2a; width: 50%;margin-left: 7%;margin-top: 15%; padding-bottom: 5.5%;text-align: center"> Delete product <br></a>
                                </div> 
                                <a href="deleteusers.php" style="color: white; direction: none;">
                               <div class="stat st-member" style="background-color:#d09d2a; margin-top:5%; width: 50.3%;margin-left: 7%;padding-bottom: 5.5%;padding-left: 3%;padding-right: 2%;text-align: center"> Delete users <br> </a>
                               </div>
                               <br><br><br><br><br><br><br><br>
                            </div>
                        </div>
    </section><!--/#main-slider-->

   
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
