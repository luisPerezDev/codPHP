<?php
	/*
	 * las expresiones regulares
	 * son patrones de busqueda dentro
	 * de cadenas. Estos patrones se construyen
	 * mediante caracteres especiales que cumplen
	 * unas reglas determinadas
	 */


	/*
	 * se hara uso de la funcion preg_match()
	 * compruyeba si una cadena se corersponde con 
	 * el patron que se pasa como parametro
	 */

	$correo = "luismiguelcabezas.com";
	$correo1 = "LUIS@ncc.aupex.org";
	$correo2 = "lu@is.cabezas@ncc.aupex.org";
	
	
	
	// \
	
	if ( preg_match ( " / ^ [a - z |  \ .] + @[ a - z | \ .] + \.(org | com | net) $  / " , $correo )  ) { 		
		echo "El correo $correo se acepta <br /> <br />";			
	} 
	
	else {
			echo "El correo $correo no cumple con el patron <br /> <br />";
	}

	if ( preg_match ( " /^[a-z | \.] + @[a-z | \.] + (org|com|net) $ / " , $correo1 )  ) {
		echo "El correo $correo1 se acepta <br /> <br />";
	}
	
	else {
		echo "El correo $correo1 no cumple con el patron <br /> <br />";
	}
	
	
	if ( preg_match ( " /^[a-z | \.] + @[a-z | \.] + (org|com|net) $ / " , $correo2 )  ) {
		echo "El correo $correo2 se acepta <br /> <br />";
	}
	
	else {
		echo "El correo $correo2 no cumple con el patron <br /> <br />";
	}
	
	// \
			
?>