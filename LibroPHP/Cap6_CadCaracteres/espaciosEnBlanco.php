<?php

	$saltoLinea = "\n";
	
	$cadena = " cadena con varios espacios en blanco      ";
	
	echo $saltoLinea . $cadena . "tamaño: " . strlen($cadena) . "<br />";
	
	echo $saltoLinea . ltrim($cadena) . "tamaño: " . strlen( ltrim ( $cadena) ) . "<br />";
	
	echo $saltoLinea . chop($cadena) . "tamaño: " . strlen ( chop ($cadena) ) . "<br />";
	
	echo $saltoLinea . trim($cadena) . "tamaño: " . strlen ( trim ($cadena) ) . "<br />";
	
	
?>	  