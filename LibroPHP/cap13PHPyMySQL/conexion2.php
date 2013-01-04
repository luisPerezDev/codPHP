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
	$consulta = " SELECT * FROM country ";
	$consulta2 = "SELECT region, code FROM world.country WHERE(region = 'Caribbean') or (continent = 'North America') ";
	
	// mysqlresult
	$resultado = mysql_query($consulta) or die ("consulta fallida");
	// mysql_result($result, $row)
	$resultado2 = mysql_query($consulta2) or die ("consulta fallida 2");
	
	// $columasAffectadas = mysql_num_rows();
		
	// se muestran los resultador n forma de tabla
	
	echo "<table border = 1>";	
	
	while($resEmp = mysql_fetch_assoc($resultado)){
		echo "<tr>";
		
		// echo "</li>" . $resEmp['Name']. "---" . $resEmp['Region'] ."</li>";
		echo "<td>" . $resEmp['Name']. "</td>" ."<td>". $resEmp['Region'] . "</td>";
		echo "</ tr>";
	}
	
	echo "</table>";
	
	
	
	
	echo "<br /> <br /> ----------------------------------- <br />";
	
	// se muestra los resultados consulta 2
	while($resEmp = mysql_fetch_assoc($resultado2)){
		echo $resEmp['code']. "---" . $resEmp['region'] ."<br />";
	}
	
		
	// se cierra la conexion cuando terminemos
	mysql_close($conexion);
	
?>