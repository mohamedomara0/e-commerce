<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--==========================================================
	=====================================-->
	 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

   

</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top " role="banner">
     
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li style="margin-right:625px; padding-top: -2px; margin-bottom: -25px;"><a href="index.php">Home</a></li>
                    
                </ul>
            </div>
        </div>
    </header>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg3.jpg');">
			<div class="wrap-login100">
                            <div class="text-center text-danger" id="jax"></div>
				
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Sign Up
					</span>
                    <div class="text-center text-danger" id="jax"></div>
                    <form action="" method="post">
               
					<div class="wrap-input100 validate-input" data-validate = "Enter Firstname">
                                <input class="input100" type="text" name="firstname" placeholder="First Name" id="1">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate = "Enter Lastname">
                                <input class="input100" type="text" name="lastname" placeholder="Last Name" id="2">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                                <input class="input100" type="email" name="email" placeholder="Email" id="3">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                        <div class="wrap-input100 validate-input" data-validate = "Enter phone number">
                                <input class="input100" type="text" name="phone" placeholder="Phone Number" id="4">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="pass" placeholder="Password" id="5">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>


					

					<div class="container-login100-form-btn">
                    <button class="login100-form-btn" onclick="getinfo()">Sign Up</button>
					</div>

					<div class="text-center p-t-90">
					<p class="txt1">Have An Account</p>
                    <a class="txt1" href="login.php">
							Login
				    </a>
					</div>
				</form>
                                
			</div>
		</div>
	</div>
        </div>
           
	<script>



                 function getinfo() {
                var fname = document.getElementById("1").value;
                var lname = document.getElementById("2").value;
                var email = document.getElementById("3").value;  
                var phone = document.getElementById("4").value;
                var password = document.getElementById("5").value;
                
                var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                         
                        if(this.responseText==1){
                            window.location.href = 'register.php';

                        }else{
                        
                        document.getElementById("jax").innerHTML = this.responseText;
                    }
                }
                };
                xhttp.open("POST", "insertcustomer.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("fname=" + fname +"&lname=" + lname +"&email="
                        + email +"&phone="+phone+"&password="+password);

            }
            
 

        </script>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>
</html>