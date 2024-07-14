<!DOCTYPE html>
<html>
    <head><title>Register Page</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
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
					<li><a href="Home.html">Home</a></li>
					<li><a href="Education.html" target="_blank">Menu</a></li>
					<li><a href="Contact.html" target="_blank">About Us</a></li>
					</ul>
				</div>
			</nav><br>
			
	    <!--Register Section -->
	        <div class="contain">
				<form action="" method="post">
					<h1>Register Form</h1>
					<p><b>Account Detail:</b></p>
					<input type="text" name="username" placeholder="Usernname" style="height:30px; width:400px;"><br><br>
					<input type="text" name="password" placeholder="Password" style="height:30px; width:400px;"><br><br>
					<p><b>Personal Detail:</b></p>
					<input type="text" name="fullName" placeholder="Full Name" style="height:30px; width:400px;"><br><br>
					<input type="text" name="phoneNum" placeholder="Phone Number" style="height:30px; width:400px;"><br><br>
					<input type="text" name="email" placeholder="E-mail" style="height:30px; width:400px;"><br><br>
							 <input type ="submit" value="Register" name="register" class="button"><br>
				</form>
				<?php
							
				if(isset($_POST["register"])){
					
					$hostname = "localhost";
					$username = "root";
					$password = "";
					$dbname = "frostbite";
		
					$connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");
					
					$username = $_POST["username"];
					$password = $_POST["password"];
					$fullName = $_POST["fullName"];
					$phoneNum = $_POST["phoneNum"];
					$email = $_POST["email"];

									
					$sqlcheck = "SELECT * FROM customer WHERE username = '$username'";
					
					$result = mysqli_query($connect,$sqlcheck);	
					
					if ($result) {
						if (mysqli_num_rows($result) > 0) {
							echo '<script type ="text/JavaScript">';
							echo 'alert("Username already exist. Please insert another username.")';
							echo '</script>';
							exit();
						}else{
							
							$sql = "INSERT INTO customer (username, password, fullName, phoneNum, email) VALUES ('$username','$password', '$fullName', '$phoneNum', '$email' )";					
							$sendsql = mysqli_query($connect,$sql);
							
							if($sendsql) {
								echo '<script type ="text/JavaScript">';
								echo 'alert("Successful Register.")';
								echo '</script>';
							} else {
								echo '<script type ="text/JavaScript">';
								echo 'alert("Failed to register. Please try again.")';
								echo '</script>';
							}
						}
					
					}
				}
				
			?>
		    </div>
    </body>
</html>