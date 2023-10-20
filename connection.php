<?php

$dbhost = "localhost";
$dbuser = "Aestro";
$dbpass = "10030107";
$dbname = "WebApp";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
