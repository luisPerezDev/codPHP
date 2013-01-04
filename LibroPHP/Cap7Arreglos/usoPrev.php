<?php

	$ciudades = array ("Badajoz", "Merida", "Caceres", "Plasencia");
	$ciudades ["España"] = "Madrid";
	$ciudades ["Portugal"] = "Lisboa";
	$ciudades ["Francia"] = "Paris";
	
	
	function recorre ($array) {
		if (!current($array) ) {
			reset($array);
		}
		do {
			$valor = current($array);
			echo ("El valor es $valor <br />");
		} while(next($array));
	}
	
	function recorreAtras ($array) {
		end($array);
		
		do {
			$valor = current($array);
			echo ("El valor es $valor <br />");
		} while(prev($array));
	}
	
	
	// se hace uso de la funcion recorre($rray) y recorrerAtras($array)
	
	echo "<br /> <br />Uso de la funcion recorre() <br /> ";
	recorre(&$ciudades);
	
	echo "<br /> <br />Uso de la funcion recorreAtras() <br /> ";
	recorreAtras(&$ciudades);
	
	
	// podremos observar que 
?>