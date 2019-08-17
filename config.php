<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "cloud_computing";
	//ket noi qua PDO
	$pdo = new PDO("mysql:host=$hostname; dbname=$database",$username,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// set che do de hien thi tieng viet
	$pdo->exec("set names utf8");
 ?>