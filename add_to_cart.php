<?php
session_start();

if (isset($_POST["add_to_cart"])) {
  // Get the ID of the item that the user is adding to their cart
  $item_id = $_POST["item_id"];

  // Check if the item is already in the cart
  if (isset($_SESSION["cart"][$item_id])) {
    // If the item is already in the cart, increase the quantity
    $_SESSION["cart"][$item_id]["quantity"]++;
  } else {
    // If the item is not in the cart, add it
    // Get the item details from the database
    $servername = "localhost";
    $username = "Aestro";
    $password = "10030107";
    $dbname = "WebApp";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM menu_items WHERE id='$item_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Add the item to the cart with a quantity of 1
    $_SESSION["cart"][$item_id] = array(
      "name" => $row["name"],
      "price" => $row["price"],
      "quantity" => 1
    );
  }
}

header("Location: index.php");

?>
