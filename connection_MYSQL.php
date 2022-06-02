<?php
	define('HOST', 'localhost');
	define('DB_NAME', 'greenbenne');
	define('USER', 'root');
	define('PASS', '');

	try{
		//$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME.";charset=utf-8", USER, PASS);
		$db = new pdo('mysql:host=127.0.0.1;dbname=greenbenne;charset=utf8','root','root');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	
	 } 

	catch(PDOException $e){ 
		echo $e;
		echo "La connexion à la base de donnée est impossible";
	 }

