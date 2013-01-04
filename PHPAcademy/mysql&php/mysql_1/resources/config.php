<?php
	
	$config['db_host'] = 'localhost';
	$config['db_user'] = 'luis';
	$config['db_pass'] = 'necaxafuse';
	$config['db_name'] = 'phpacademy';
	
	foreach ($config as $k => $v ) {
		// stroupper convierte en mayusculas
		// define define un constante
		define( strtoupper ( $k ) , $v ) ;
	}
	
?>


