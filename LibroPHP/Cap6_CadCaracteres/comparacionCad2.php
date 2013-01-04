<?php
	// para la comparacion de cadenasm se utiliza la funcion strcmp()
	
	// si el valor de la salida es 0 las cadenas son iguales
	// si el valor es positivo la primera cadema es mayor
	// si el valro es negativo la segunda cadena es mayor
	
	$cadena1 = "Prueba";
	$cadena2 = "prueba";
	
	
	// strcasecmp es la funcion responsable de comparar cadenas de caracteres
	// esta funcion no es sensible a mayusculas es decir hOla y HOLa son iguales
	if(strcasecmp($cadena1, $cadena2) == 0){
		echo "Las dos cadenas son iguales";
	} elseif(strcmp($cadena1, $cadena2) < 0){
		echo "la cadena1 es menor que la cadena 2";	
	}
	else {
			echo "La cadena 1 es mayor que la cadena 2";
	}
	
?>