<?php

	$saltoLinea = "\n";
	
	$cadena = " cadena con varios espacios en blanco      ";
	
	echo $saltoLinea . $cadena . "tama�o: " . strlen($cadena) . "<br />";
	
	echo $saltoLinea . ltrim($cadena) . "tama�o: " . strlen( ltrim ( $cadena) ) . "<br />";
	
	echo $saltoLinea . chop($cadena) . "tama�o: " . strlen ( chop ($cadena) ) . "<br />";
	
	echo $saltoLinea . trim($cadena) . "tama�o: " . strlen ( trim ($cadena) ) . "<br />";
	
	
?>	  