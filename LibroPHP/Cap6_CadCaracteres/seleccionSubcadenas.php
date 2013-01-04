<?php
	$cadena = "Esta cadena tiene muchas letras ";
	
	// devuelve la cadena completa 
	echo substr($cadena,0) . "<br />";
	
	// desde el caracter 12 hasta el final
	echo substr($cadena,12) . "<br />";
	
	// devuelve 6 caracteres dese el caracter 18 
	echo substr($cadena,18,6) . "<br />";
	
	// devuelve los ultimos 6 caracteres
	echo substr($cadena,-6) . "<br />";
	
	// desde la posicion 26, contando desde atras, 6 caracteres
	echo substr($cadena,-26,6) . "<br />";
	
	// empezando en el caracter 4 y terminado en el 7 desde atras
	echo substr($cadena,4,-7) . "<br />";
	
?>