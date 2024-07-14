<?php 
include 'header.php';
session_start();
$connect = mysqli_connect("localhost", "root", "", "frostbite");


if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["M_Code"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title> Shopping Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["M_Name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>RM <?php echo $values["M_price"]; ?></td>
						<td>RM <?php echo number_format($values["item_quantity"] * $values["M_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["M_Code"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["M_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">RM <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
					</table>	
		            <div style="width: 90%; padding: 20px; text-align: right;">
			            <a href="checkout.php"><img src="image/checkout.png" width="40"></a>
			            <a href="checkout.php">Check Out</a> 
		            </div>
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>
<?php include 'footer.php'?>
