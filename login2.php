
<?php

include("dataBaseConnexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="page.css">
     
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="login2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="bg.svg">
		</div>


		<div class="login-content">



			<form method="POST" action="VerificationLogin.php">
				<img src="avatar.svg">

  <?php if (isset($_GET['error'])) { ?>

    
        <p id="error" class="error"><?php echo $_GET['error']; ?></p>


      <?php } ?>
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" class="input" placeholder="Username" name="user">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="password" class="input" placeholder="Password" name="password">
            	   </div>
            	</div>
            
            	<input type="submit" class="btn" name="submit" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="javaScript.js"></script>
</body>
</html>