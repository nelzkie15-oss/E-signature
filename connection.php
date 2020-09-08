<?php

$server = "localhost";
$user = "root";
$pass = "";


	$pdo = new PDO("mysql:host=$server;dbname=signature_db", $user, $pass);

	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


	if(!$pdo){
      
      die("Fatal Error: Connection Failed!");
    
	}

 ?>