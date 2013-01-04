<?php
	// se define el arreglo
	$ciudades = array("Badajoz", "merida", "caceres", "placencia");
	
	/*
	 * uso de for each para recorrer todo el arreglo
	 * foreach toma el array a recorrer y sus valores
	 * los va almacenando en la variable $ciudad
	 * 
	 */ 
	
	foreach ($ciudades as $ciudad){
		echo "$ciudad, ";
	}
	
	/* 
	 * existe una segunda contruccion que permite recuperar 
	 * el indice y el valor 
	 */
	
	echo "<br> ************************************************************* <br>";
	
	foreach ($ciudades as $indice => $ciudad){
		echo "El indice $indice tiene el valro $ciudad <br>";
	}
	
	/*
	 * php incorpora un mecanismo para recorrer arrays mutidimensionales
	 * por medio de list()
	 */
	
	$comida = array(
			 		array("manzana", "pera", "melon"),
					array("carme", "pescado", "fruta"),
			 		array(12, 23, 34),
			  );
	
	// ahora se recorre el array mutimensional
	
	foreach ( $comida as $indice => list ($a, $b, $c) ) {
		echo "valores del indice $indice :: $a, $b y $c <br />";
	}
	
?>