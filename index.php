<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
	<link rel="icon" href="icon2.png" type="image/gif" sizes="16x16">

</head>

<body>

	<?php

   include("db_conn.php");
   session_start();
    
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      
      $usr= mysqli_real_escape_string($conn,$_POST['username']);
      $pas =mysqli_real_escape_string($conn,$_POST['password']); 

      $sql = mysqli_query($conn,"SELECT * FROM login WHERE username='$usr' AND password='$pas' LIMIT 1");

    if(mysqli_num_rows($sql) == 1)
    { 
        $row = mysqli_fetch_array($sql);

        session_start(); 

        $_SESSION['username'] = $row['username']; 
        

        $_SESSION['login'] = TRUE;

        if(isset($_SESSION['username']))
        {

        header("Location: home.php"); 
        }
        exit; 

    }
    else
    { 
       $err ="<div id=\"alert\" class=\"alert alert-danger alert-dismissible\">&times;</a><strong>Your Login Name or Password is invalid </strong></div>";
   } 


  }

?>


	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="" method="post" >
					<span class="login100-form-title">
						College Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button >
							<input class="login100-form-btn" type="submit" name="submit" value="Login">
						</button>
					</div>

				</form>
					<label> <?php if(isset($err)){echo $err;} ?> </label>

			</div>
		
		</div>
	</div>
	
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="main.js"></script>

</body>
</html>