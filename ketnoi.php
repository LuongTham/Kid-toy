<?php

$connection = pg_connect("host=ec2-54-225-106-93.compute-1.amazonaws.com port=5432 dbname=d8bgahfgm7qf2o user=njsytzlwnmlnhu password=b109ec9762a8357e014891406f11fa2046d644212105010796d202df7cabb87b");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>
