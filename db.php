<?php
require_once("db.php");
$servername	= "localhost";
$username	= "root";
$password	= "";
$database	= "6701174095";

//create connection
$conn = new mysqli($servername,$username,$password,$database);

if ($conn->connect_error) {
	die("Gagal terhubung kedatabase $database<br>
		Saya mengerjakan TP ini dengan JUJUR !!!!!!!!");
}
?>