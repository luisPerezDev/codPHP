<?php

	// se hara uso de la funion str_replace()
	// que toma un conju7ntod e caracteres a buscar, 
	// un grupo que debe sustituirse por la anterior
	// y una cadena de caracteres sobre la cual actuar
	// \

	
	
	$cadena = "Esta cadena tiene muchas letras";
	echo "cadena original: " . " \" " . $cadena . " \" " . " <br /> ";
	
	// str_replace($search, $replace, $subject)
	echo "Cadena resultante : " . $cadena = str_replace("cadena","conjunto", $cadena . "<br /> <br />");
	
	// si en las caena sexistieran mas de una instancia
	// del conjunto buscado, todas las ocurrencias se 
	// cambiaran
	
	$cadena = "Esta cadena tiene muchas letras y cadenas";
	echo "cadena original: " . " \" " . $cadena . " \" " . " <br /> ";
	
	// str_replace($search, $replace, $subject)
	echo "Cadena resultante : " . $cadena = str_replace("Esta","Este", $cadena) . "<br /> <br />";
	
	
	// se remplaza en este caso cada una de las ocurrencias que se encuentra en la cadena
	$cadena = "Esta cadena tiene muchas letras y cadenas";
	echo "cadena original: " . " \" " . $cadena . " \" " . " <br /> ";
	
	// str_replace($search, $replace, $subject)
	echo "Cadena resultante : " . $cadena = str_replace("cadena","conjunto", $cadena) . "<br />";
	
	echo "<br /> <br /> Fin del programa";
?>