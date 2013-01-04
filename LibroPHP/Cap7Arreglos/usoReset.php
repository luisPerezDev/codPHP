<?php
	function recorre($array){
		if (!current($array) ) {
			reset($array);
		}
		do {
			$valor = current($array);
			echo ("El valor es $valor <br />");
		} while(next($array));
	}
?>