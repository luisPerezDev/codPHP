<?php

	$config['db'] = array (
			'host' => 'localhost',
			'username' => 'luis',
			'password' => 'necaxafuse',
			'dbname' => 'website'
	);
	

// 			$dsn = "localhost";
// 			$username = "luis";
// 			$password = "necaxafuse";
// 			$dbname = "website";

	
	
	// $db = new PDO($dsn, $username, $passwd);
	$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname='. $config['db']['dbname'], $config['db']['username'], $config['db']['password'])
	
	
?>