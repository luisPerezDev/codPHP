<?php

	// se hara uso de la funcion strrpos r = reverse
	
	$cadena = "Esta cadena tiene muchas letras";
	
	echo "La primera ocurrencia de 'a' es ".strpos($cadena, "a"). "<br />";
	
	echo "La primera ocurrencia desde atras de 'a' es ".strrpos($cadena, "a"). "<br />";
	
?>