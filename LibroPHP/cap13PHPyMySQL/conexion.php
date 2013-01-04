<?php

	$servidor = "localhost";
	$usuario = "luis";
	$password = "necaxafuse";
	$baseDatos = "world";
	
	// conexion al servidor de base de datos
	
	$conexion = mysql_connect($servidor, $usuario, $password);
	
	// se seleciona la base de datos con la que se va a trabajar
	mysql_select_db($baseDatos) or die ("imposible sellecionar la base de datos");
	
	// se genera la consulta
	$consulta = " SELECT * FROM country ";
	$consulta2 = " SELECT * FROM country WHERE (population = 8000)";
	
	// mysqlresult
	$resultado = mysql_query($consulta) or die ("consulta fallida");
	// mysql_result($result, $row)
	$resultado2 = mysql_query($consulta2) or die ("consulta fallida 2");
	
	// $columasAffectadas = mysql_num_rows();
	
	// se muestran los resultados
	
	echo "<ul>";
	
	while($resEmp = mysql_fetch_assoc($resultado)){
		// echo "</li>" . $resEmp['Name']. "---" . $resEmp['Region'] ."</li>";
		echo "<li>" . $resEmp['Name']. " --- " . $resEmp['Region'] . "</li>";
	}
	
	echo "</ ul>";
	
	
	
	
	echo "<br /> <br /> ----------------------------------- <br />";
	
	// se muestra los resultados consulta 2
	// esto se mostraran por medio de tablas
	
	?>
	
	<table border = "2" borderColor = "red">
	<tr>
	<?php
		while($resEmp = mysql_fetch_assoc($resultado2)){
			echo '<td>' . $resEmp['Name']. '</ td> <td>' . $resEmp['Region'] .'</td>';
		}
	?>
	
	</tr>
	
	</table>
	
	<?php		
		// se cierra la conexion cuando terminemos
		mysql_close($conexion);
	?>