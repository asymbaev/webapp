<?php
session_start();

if (isset($_POST["clear_cart"])) {
  unset($_SESSION["cart"]);
}

header("Location: index.php");
?>
