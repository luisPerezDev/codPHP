<?php
	$ciudades = array("Badajoz", "merida", "caceres", "plascencia");
	
	$ciudades["Espa�a"] = "Madrid";
	$ciudades["Portugal"] = "lisboa";
	$ciudades["Francia"] = "Paris";
	
	do{
		$valor = current($ciudades);
		echo "el valor es : $valor <br />";
	}while(next($ciudades));
	
?>