<?php

	$servidor = "localhost";
	$usuario = "luis";
	$password = "necaxafuse";
	$baseDatos = "world";
	
	// conexion al servidor de base de datos
	
	$conexion = mysql_connect($servidor, $usuario, $password);
	
	// se seleciona la base de datos con la que se va a trabajar
	mysql_select_db($baseDatos) or die ("imposible selecionar la base de datos");
	
	// se genera la consulta
	$consulta = " INSERT INTO country VALUES ('BBB','Aruba','North America','Caribbean',193.00,NULL,103000,
			              78.4,828.00,793.00,'Aruba','Nonmetropolitan Territory of The Netherlands',
			              'Beatrix',129,'AW') ";

	// mysqlresult
	$resultado = mysql_query($consulta, $conexion) or die ("consulta fallida");
			
     // mysql_query("INSERT INTO empresa (nombre, direccion) VALUES ('Apple', '1 Infinite Loop')");";
     

	// se cierra la conexion cuando terminemos
	mysql_close($conexion);
	
?>