<?php 

include 'header.php';
session_start();
$connect = mysqli_connect("localhost", "root", "", "frostbite");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "M_Code");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'M_Code'			=>	$_GET["id"],
				'M_Name'			=>	$_POST["hidden_name"],
				'M_price'			=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
				'M_Code'			=>	$_GET["id"],
				'M_Name'			=>	$_POST["hidden_name"],
				'M_price'			=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}




?>
<!DOCTYPE html>
<html>
	<head>
		<title>Menu </title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	
	</head>
	<body>
		<div class="container">
	        <div class="col-md-25">
			    <div class="row">
				    <div class="col-md-20">
					<h2 class="text-center">Cakes</h2><hr>
					<div class="col-md-12">
					    <div class="row">
			<?php
				$query = "SELECT * FROM menu WHERE M_Category = 'cakes'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result)){?>
				      <div class="col-6"> <center>
				      <div class="card card-body text-center">
				      
					        <form method="post" action="cakes.php?id=<?=$row['M_Code']?>"><br>
					
						    <img src="<?php echo $row["M_img"] ?>" style="height: 350px; width: 350px;" /><br />

						    <h4 class="text-info"><?php echo $row["M_name"]; ?></h4>

						    <h4 class="text-center">RM <?php echo $row["M_price"]; ?></h4>

						    <input type="text" name="quantity" value="1" class="form-control" />

						    <input type="hidden" name="hidden_name" value="<?php echo $row["M_name"]; ?>" />

						    <input type="hidden" name="hidden_price" value="<?php echo $row["M_price"]; ?>" />

						    <input type="submit" name="add_to_cart" class="btn btn-block my-2" value="Add To Cart" style="background-color:pink;"><br>

					</div>
				</form><br><br>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
</div>
					  </div>
					</div>
				</div>
		    </div>
	    </div>
	</body>
</html>

<?php include 'footer.php'?>