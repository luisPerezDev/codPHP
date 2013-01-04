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
	// UPDATE tabla SET campo = 'valor' WHERE condicion
	
	$consulta = " UPDATE country SET code = 'ZZZ' WHERE ( code = 'BBB') ";
	
	// mysqlresult
	$resultado = mysql_query($consulta, $conexion) or die ("consulta fallida");
			
	// se cierra la conexion cuando terminemos
	mysql_close($conexion);

?>