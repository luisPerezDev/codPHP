<?php
	$ciudades = array("Badajoz", "merida", "caceres", "plascencia");
	
	$ciudades["España"] = "Madrid";
	$ciudades["Portugal"] = "lisboa";
	$ciudades["Francia"] = "Paris";
	
	
	function recorre($ciudades){
		do{
			$valor = current($ciudades);
			echo "el valor es : $valor <br />";
		}while(next($ciudades));
	}
	
	recorre(&$ciudades);
	
	recorre(&$ciudades);
	
?>