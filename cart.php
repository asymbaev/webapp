<?php

session_start();

if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = array();
}

foreach ($_SESSION["cart"] as $item) {
  echo "<div class='cart-item'>";
  echo "<span>" . $item["name"] . "</span>";
  echo "<span>$" . $item["price"] . "</span>";
  echo "<span> qt " . $item["quantity"] . "<span>";
  echo "</div>";
}

