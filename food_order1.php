<?php
	include("connector.php");
	session_start();

	$username=$_SESSION["username"];

	

	$result=mysqli_query($conn,"SELECT * from login where username='$username'");

	$row=mysqli_fetch_array($result);

	
	$id=$row["id"];

	if (isset($_POST["submit"])) {

			
			$name=$_POST["name"];
			$mobile=$_POST["mobile"];
			$address=$_POST["address"];
			$email=$_POST["email"];
			$quantity=$_POST["quantity"];
			$price_of_food=$_POST["price_of_food"];

			$result=mysqli_query($conn,"INSERT into order_list(name,mobile,address,email,quantity,price_of_food,user_id) values ('$name','$mobile','$address','$email','$quantity','$price_of_food','$id')");
			
			if ($result==true) {
				echo "<br>Thanks, Dear Customer,Your information submitted Successfully";
			}
			else
			{
				echo "<br> failed ";
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
        body{
            background-image:url(images/images7.jpg);
            background-size:cover;
            background-attachment:fixed;
        }
        .atik{
            text-align:center;
            padding-top:40px;
            color: black;
            font-size:30px;
        }
    </style>
</head>
<body>
<div class="atik">
	<form action="" method="POST">

		Full-Name: <br>
		<input type="text" name="name"> <br>
		Mobile: <br>
		<input type="number" name="mobile"> <br>
		 
		 Full-Address: <br>
		<input type="text" name="address"> <br>
		 
         E-mail: <br>
		<input type="email" name="email"> <br> <br>
		Quantity: <br>
		<input type="number" name="quantity"> <br> 
		 <br>
		 Price_of_food: <br>
		<input type="number" name="price_of_food"> <br> 
		<br>
		 <input type="submit" name="submit" style="font-size:35px;color:red" > <br>

	</form>
	</div>
</body>