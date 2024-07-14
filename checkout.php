<?php session_start();
include "header.php";

$connect = mysqli_connect("localhost", "root", "", "frostbite");

		    if(isset($_POST['sb']))
			{
				$M_Code = $_POST['code'];
				$username = $_POST['uid'];
				$M_price = $_POST['price'];
				$quantity = $_POST['qty'];
				$total  = $price*$qty;

				
				mysqli_query($con,"insert into addcart(p_id,u_id,price,qty,total ) values('$pid','$uid','$price','$qty','$total')") or die(mysqli_error($con));
				echo "<script>alert('Your data Is Add Inside Cart')</script>";

			}
?>

<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
		<div style="width: 50%; margin: 0 auto;">
		

<form action="" method="post">
		
		<table align="center" border="1" cellspacing="14" cellpadding="12" style="color: black" >

			    <tr align="center">

			    	<td style="color: red">  Product ID  </td>
			    	<td> <input type="hidden" name="pid"  value="<?php echo $_GET['M_Code']; ?>"><?php echo $_GET['code']; ?></td>
			    	
			    </tr>

			    <tr align="center">
			    	<td style="color: red">   Your USERID </td>
			        <td> <input type="hidden" name="uid" value="<?php echo $_GET['username']; ?>"><?php echo $_GET['uid']; ?></td>
			    </tr>
			    <tr align="center">
			    	<td style="color: red">   Price </td>
			        <td> <input type="hidden" name="price" value="<?php echo $_GET['M_price']; ?>"><?php echo $_GET['price']; ?></td>
			    </tr>
				    <tr align="center">
			    	<td style="color: red">   QTY</td>
			        <td> <input type="number" name="qty" value="" min=1 max=10 required></td>
			    </tr>

                <tr align="center">
                	<td colspan="4"> <input type="submit" name="sb" value="Add Cart Now"></td>
                </tr>
		</table>
	</form>


	</div>
</div>


<?php include "footer.php"; ?>