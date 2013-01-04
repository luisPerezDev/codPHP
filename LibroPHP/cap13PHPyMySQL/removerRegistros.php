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
	
	// DELETE FROM tabla WHERE condición
	
	$consulta = " DELETE FROM country WHERE (code = 'UUU')";
	
	// mysqlresult
	$resultado = mysql_query($consulta, $conexion) or die ("consulta fallida");
		
	// mysql_query("INSERT INTO empresa (nombre, direccion) VALUES ('Apple', '1 Infinite Loop')");";
	 
	
	// se cierra la conexion cuando terminemos
	mysql_close($conexion);

?>