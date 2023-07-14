<?php

$host		= 'localhost';
$db			= 'db_hemaraya';
$user		= 'root';
$password	= '';

	function connect($host, $db, $user, $password){
		try {
			$conn = "mysql:host=$host;dbname=$db;charset=UTF8";
			$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
			//echo "Connected <br>";
			return new PDO($conn, $user, $password, $options);
			
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

return connect($host, $db, $user, $password);
?>