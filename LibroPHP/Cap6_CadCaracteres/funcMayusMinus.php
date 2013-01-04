<?php
	// funciones strlower() y strtupper()
	// devuelve la cadena que se pasa
	// como argumento completamente en
	// minuscula y mayuscula respectivamente \
	
	$cadena = "Hay palabras en MAYUSCULAS y en minusculas<br />";
	
	echo " La cadena original es :  " . " \" " . $cadena . " \" " . "<br />";
	
	

	echo strtolower($cadena) . "<br /> ";
	echo strtoupper($cadena);
	

?>