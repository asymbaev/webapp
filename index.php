<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>





<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Menu</title>
	<!-- CSS Reset -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- CSS Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Hero Section -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<a href="logout.php">Logout</a>
<br>
	Hello, <?php echo $user_data['user_name']; ?>





<?php
session_start();

if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = array();
}
?>


	<!-- Navbar -->
	<nav class="navbar">
		<ul>
			<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
			<li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
			<li><a href="services.php"><i class="fas fa-cogs"></i> Services</a></li>
			<li><a href="user.php"><i class="fas fa-images"></i> Profile</a></li>
			<li><a href="linktree.php"><i class="fas fa-envelope"></i> Contact</a></li>
			<li><a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>

		</ul>
	</nav>
	<!-- Hero Section-->
	<section class="hero-section">
		<div class="container">
		  <div class="row align-items-center">
			<div class="col-md-6">
			  <h1>Discover our delicious cuisine</h1>
			  <div class="col-md-6">
  <h2>Welcome to Our Restaurant</h2>
  <p id="text"></p>
</div>
			  <!--<p>Enjoy our cuisine, check out our menu, you may order at this same page for your convenience.</p>-->
			  <script>
  const text = "Enjoy our cuisine, check out our menu, you may order at this same page for your convenience.";
  const words = text.split(" ");
  const el = document.getElementById("text");

  let i = 0;
  const intervalId = setInterval(() => {
    if (i < words.length) {
      el.innerHTML += words[i] + " ";
      i++;
    } else {
      clearInterval(intervalId);
    }
  }, 250);
</script>
			  <a href="menu.php" class="btn btn-primary">Explore Now</a>
			</div>
			<div class="col-md-6">
			  <img src="https://i.pinimg.com/originals/8b/b3/87/8bb387ee878eddeb23baea344d4e13af.gif" alt="Cooking Image">
			</div>
		  </div>
		</div>
	  </section>


	<!--menu-items-->
	<!--<div class="menu">
		<div class="menu-item">
			<span>Burger</span>
			<span>$10</span>
			<button>Add to cart</button>
		</div>
		<div class="menu-item">
			<span>Pizza</span>
			<span>$15</span>
			<button>Add to cart</button>
		</div>
		<div class="menu-item">
			<span>Salad</span>
			<span>$8</span>
			<button>Add to cart</button>
		</div>
		<div class="menu-item">
			<span>Steak</span>
			<span>$20</span>
			<button>Add to cart</button>
		</div>
		<button class="checkout-btn">Checkout</button>
	</div> -->


	<div class="menu">



		<?php
			// Connect to MySQL database
			$servername = "localhost";
			$username = "Aestro";
			$password = "10030107";
			$dbname = "WebApp";
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Query the menu items from the database
			$sql = "SELECT * FROM menu_items";
			$result = mysqli_query($conn, $sql);

			// Loop through the results and display each menu item
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
				  echo "<div class='menu-item'>";
				  echo "<span>" . $row["name"] . "</span>";
				  echo "<span>$" . $row["price"] . "</span>";
				  echo "<form method='post' action='add_to_cart.php'>";
				  echo "<input type='hidden' name='item_id' value='" . $row["id"] . "'>";
				  echo "<button type='submit' name='add_to_cart'>Add to cart</button>";
				  echo "</form>";
				  echo "<span>Quantity: " . (isset($_SESSION["cart"][$row["id"]]) ? $_SESSION["cart"][$row["id"]]["quantity"] : 0) . "</span>";
				  echo "</div>";

				}
			  }

			  echo "<a href='cart.php' class='checkout-btn' id='checkout-btn'>Checkout</a>";




			// Close the database connection
			mysqli_close($conn);
		?>

		<!--<button class="checkout-btn">Checkout</button> -->




	</div>

	<!--<form method="post" action="clear_cart.php">
  <button type="submit" name="clear_cart">Clear Cart</button>
</form> -->
<form method="post" action="clear_cart.php">
  <button type="submit" name="clear_cart" style="background-color: #333; color: #fff;">Clear Cart</button>
</form>


<!-- reviews -->

<section id="reviews" class="bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Reviews</h2>
    <div id="reviewCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#reviewCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#reviewCarousel" data-slide-to="1"></li>
        <li data-target="#reviewCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex align-items-center justify-content-center">
            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" alt="Reviewer" class="rounded-circle mr-3" width="150" height="150">
            <div>
              <h4>Jane Doe</h4>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in pulvinar neque. Vivamus tincidunt nisl vel tincidunt lacinia. Nam molestie nunc justo, in lacinia mi bibendum eget.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex align-items-center justify-content-center">
            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" alt="Reviewer" class="rounded-circle mr-3" width="150" height="150">
            <div>
              <h4>John Smith</h4>
              <p class="text-muted">Fusce tempus ipsum eu risus auctor posuere. Maecenas at orci vel turpis laoreet elementum non non lorem. Integer elementum finibus justo vitae gravida.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex align-items-center justify-content-center">
            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" alt="Reviewer" class="rounded-circle mr-3" width="150" height="150">
            <div>
              <h4>Alice Johnson</h4>
              <p class="text-muted">Nulla quis lacus id velit euismod commodo. Donec luctus vestibulum tortor, eu fermentum orci commodo nec. Morbi vel odio ut lorem lobortis commodo.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#reviewCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>







	<!-- CTA -->
	<div class="newsletter">
		<h3>Sign up for our Newsletter</h3>
		<form id="newsletter-form">
		  <input type="email" name="email" id="email" placeholder="Enter your email">
		  <button type="submit" id="submit-btn">Subscribe</button>
		</form>
		<p id="response"></p>
	  </div>


	  <!-- Chatbot -->

	<h3>Your foodbot</h3>
	<div id="chatlog"></div>
	<input type="text" id="input" placeholder="Type your message here...">
	<button onclick="send()" style="background-color: #333; color: #fff ">Send</button>


	<!-- Footer -->
	<footer class="footer">
		<div class="container">
		  <div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
			  <h3>About Us</h3>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
			  <h3>Contact Us</h3>
			  <ul>
				<li><i class="fas fa-map-marker-alt"></i> 123 Main St, Anytown USA</li>
				<li><i class="fas fa-phone"></i> (123) 456-7890</li>
				<li><i class="fas fa-envelope"></i> info@example.com</li>
			  </ul>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
			  <h3>Follow Us</h3>
			  <div class="social-links">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-linkedin"></i></a>
			  </div>
			</div>
		  </div>
		</div>
	  </footer>







	<!-- JavaScript Code -->
	<script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<!-- Hero Section -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



	<script src="script.js"></script>
	<script src="foodbot.js"></script>
	<script>
  document.getElementById('checkout-btn').addEventListener('click', function() {
    var phoneNumber = prompt('Please enter your phone number:');
    if (phoneNumber != null) {
      alert('Thank you! We will contact you at ' + phoneNumber + ' to confirm your order.');
    }
  });
</script>

</body>
</html>
