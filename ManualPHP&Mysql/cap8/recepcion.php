<!-- pendiente -->

<head>
	<title>Creaci�n de un portal con PHP y MySQL </title>
</head>

<body>
	<?
	// if ($archivo != "none" AND $archivo_size != 0 AND $archivo_size<=$lim_tamano){
	if ($archivo != "none"){
		
		echo "<h2>Se ha transferido el archivo $archivo</h2>";
		
		// echo "<br>Su tama�o es: $archivo_size bytes<br>";
		
		
	// 	if ( copy ($archivo, "c:/ficheros/upload/".$archivo) ) {
	//		echo "<h2>Se ha transferido el archivo $archivo</h2>";
			/* Indicamos el nombre del archivo transferido. */
	//		echo "<br>Su tama�o es: $archivo_size bytes<br>";
			/* Indicamos el tama�o del archivo transferido */
	//		echo "<br>EI fichero es tipo: $archivo_type <br>";
			/* Por �ltimo, indicamos a qu� tipo de archivo corresponde. */
	//	} 
		
		
	} else {
		echo "<h2>No ha podido transferirse el fichero</h2>";
		echo "<h3>su tama�o no puede exceder de $lim_tamano bytes</h2>";   
	}
	
	echo "<a href='.$archivo.'>";

?>
</body>