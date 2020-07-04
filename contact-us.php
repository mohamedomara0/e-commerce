<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>contact us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">

   
    </script>
    <style type="text/css">

    </style>
</head><!--/head-->
<body>
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top opaqued" role="banner">
    <div id="search-wrapper">
        <div class="container">
            <input id="search-box" placeholder="Search">
        </div>
    </div>
    </div>
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
                    <li><a href="home.php">Home</a></li>
                   <li><a href="login.php">Logout</a></li>
                    
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <div id="content-wrapper">
        <div id="img1">
        </div>
        <section id="contact" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 fade-up">
                        <h3>Contact Information</h3>
                       
                    </div><!-- col -->

                    <div class="col-md-8 fade-up">
                        <h3>Drop Us A Message</h3>
                        <br>
                        <br>
                        <div id="message"></div>
                         <div class="text-center text-danger" id="jax"></div>

                         <form method="post" action="#" id="contactform">
                            <input type="text" name="name" id="name" placeholder="Name" />
                            <input type="text" name="email" id="email" placeholder="Email" />
                            <input type="text" name="job" id="website" placeholder="Job" />
                            <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                            
                            <button   class="btn btn-outlined btn-primary" onclick="getinfo()">Submit</button>
                        </form>
                    </div><!-- col -->
                </div><!-- row -->
                <div class="gap"></div>
            </div>
        </section>
        <script>



                 function getinfo() {
                var fname = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var job = document.getElementById("website").value;  
                var comments = document.getElementById("comments").value;
               
               
             
 
                alert("Thank you for contacting us");


                var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                         
                        if(this.responseText==1){
                            window.location.href = 'contact-us.php';
                           
                            
                        }else{
                        
                        document.getElementById("jax").innerHTML = this.responseText;
                    }
                }
                };
                xhttp.open("POST", "insertcontactus.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("fname=" + fname + "&email="+email+"&job="+job+"&comments="+comments);

            }
            
 

        </script>

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        
                    </div>
                    <div class="col-sm-4">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/init.js"></script>
</body>
</html>
