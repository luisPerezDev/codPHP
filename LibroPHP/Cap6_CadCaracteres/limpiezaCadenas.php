<?php

	$saltoLinea = "\n";

	$cadena = "    cadena con varios espacios en blanco      ";
	
	echo $saltoLinea . $cadena . " tamaño " . strlen($cadena) . " caracteres";
	echo "<br />";
			
	// funcion ltrim retirra espacios en blanco u otros caracteres del inicio de un string
	echo $saltoLinea . ltrim($cadena) . " tamaño " . strlen ( ltrim ($cadena) ) . " caracteres";
	echo "<br />";
	
	// funcion chop quita los caracteres especificados en su segundo argumento
	echo $saltoLinea . chop($cadena) . " tamaño " . strlen( chop ($cadena) ) . " caracteres";
	echo "<br />";
	
	// funcion trim 
	echo $saltoLinea . trim($cadena) . " tamaño " . strlen( trim ($cadena) ) . " caracteres";
	echo "<br />";
	
	
?>
