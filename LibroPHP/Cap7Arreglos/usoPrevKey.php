<?php
	function recorre($ciudades){
		if(!current($ciudades)) {
			reset($ciudades);
		}
		do{
			$valor = current($ciudades);
			$indice = key($ciudades);
			echo "$indice : valor : $valor <br />";
		}while(next($ciudades));
	}
?>