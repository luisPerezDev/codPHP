<?php
	$pila = array();
	
	array_push($pila, "uno", "dos", "tres");
	array_push($pila, "cuatro", "cinco");
	
	while($valor = array_pop($pila)){
		echo "valor extraido es $valor <br />";
	}

?>