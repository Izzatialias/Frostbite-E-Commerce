<!DOCTYPE html>
<html>
    <head><title>Login Page</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
		<body style="font-family: BR Firma; background-repeat:no-repeat; background-size:cover;" background="image/ice1.jpg">
			<!-----navigation------>
			<nav>
				<!--logo-->
				<div class="head">
					<a href="Navigation.html" class="logo" ><img src= "image/logo.png" alt="" height="250px"></a>
					<div class="acc">
						<a href="https://www.instagram.com/izzati.alias/" target="_blank" ><img src="image/account.png" style="width:47px;"></a>
						<a href="https://www.instagram.com/izzati.alias/" target="_blank" style="margin-left:20px"><img src="image/cart.png" style="width:54px;"></a>
						<a href="Login.php" style="margin-left:20px;padding-top:15px;">Log in</a>
					</div>
				</div>
				<!--menu-->
				<div class="menu">
					<ul>
					<li><a href="Home.php">Home</a></li>
					<li><a href="Education.html" target="_blank">Menu</a></li>
					<li><a href="Contact.html" target="_blank">About Us</a></li>
					</ul>
				</div>
			</nav><br>
			
	    <!--Login Section -->
	        <div class="contain">
				<form action="" method="post">
					<h1>Login</h1>
					<p>Please enter your username and password:</p>
					<input type="text" name="username" placeholder="Username" style="height:30px; width:400px;"><br><br>
					<input type="password" name="password" placeholder="Password" style="height:30px; width:400px;"><br><br>
					<input type ="submit" value="Login" name="login" class="button"><br><br>
					<p>Don't you have an account?<a href="register.php">Create One</a></p>
				</form>
				<?php
							
				if(isset($_POST["login"])){
		
					$hostname = "localhost";
					$user = "root";
					$password = "";
					$dbname = "frostbite";
		
					$connect = mysqli_connect($hostname, $user, $password, $dbname) OR DIE ("Connection failed");
					
					$username = $_POST["username"];
					$password = $_POST["password"];

					$sqlcheck = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
					
					$result = mysqli_query($connect,$sqlcheck);	
					
					if ($result) {
						if (mysqli_num_rows($result) > 0) {
							header("Location:home.html");
						}else{
							echo '<script type ="text/JavaScript">';
							echo 'alert("Wrong username or password! Please try again.")';
							echo '</script>';
						}
					}
					
					session_start();
					$_SESSION["username"] = $username;
				}
				
			?>
		    </div>
    </body>
</html>