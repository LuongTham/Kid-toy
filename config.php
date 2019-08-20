<!-- <?php 
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
 -->
 <?php
$connection = pg_connect("host=ec2-54-225-106-93.compute-1.amazonaws.com port=5432 dbname=d8bgahfgm7qf2o user=njsytzlwnmlnhu password=b109ec9762a8357e014891406f11fa2046d644212105010796d202df7cabb87b");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>