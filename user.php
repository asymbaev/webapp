<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<!-- CSS Reset -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- CSS Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
	<ul>
		<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
		<li><a href="#"><i class="fas fa-info-circle"></i> About</a></li>
		<li><a href="#"><i class="fas fa-cogs"></i> Services</a></li>
		<li><a href="#"><i class="fas fa-images"></i> Profile</a></li>
		<li><a href="linktree.php"><i class="fas fa-envelope"></i> Contact</a></li>
		<li><a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>
		<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
	</ul>
</nav>

<!-- User info -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Welcome, <?php echo $user_data['user_name']; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h2>User Name:</h2>
			<p><?php echo $user_data['user_name']; ?></p>
		</div>
		<div class="col-md-4">
			<h2>Order History:</h2>
			<p>Order history goes here</p>
		</div>
		<div class="col-md-4">
			<h2>Points Rewards:</h2>
			<p>Points rewards go here</p>
		</div>
	</div>
</div>

</body>
</html>
