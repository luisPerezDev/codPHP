<?php

	$cadena = "este texto sera convertido a mayusculas";
	
	$cadenaMayusculas = strtoupper($cadena);
	
	echo $cadenaMayusculas . "<br />";
	
	$cadena = "ESTE TEXTO DEBERA SER CONVERTIDO EN MINUSCULAS";
	
	$cadenaMinusculas = strtolower($cadena);
	
	echo $cadenaMinusculas . "<br />";
	
?>