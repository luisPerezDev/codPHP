<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-ES">
<head>
<title>Ordenaciones</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<?php
		function recorre($numero) {
			foreach ($numero as $indice => $valor) {
				echo "$indice: $valor<br>";
			}
		}
		
		$pila = array("cinco"=>5,"uno"=>1,"cuatro"=>4,"dos"=>2,"tres"=>3);
		echo "Array sin ordenar<br>";
		
		recorre($pila);
		echo "Ordenación asort()<br>";
		
		asort($pila);
		recorre($pila);
		echo "Ordenación arsort()<br>";
		
		arsort($pila);
		recorre($pila);
		echo "Ordenación ksort()<br>";
		
		ksort($pila);
		recorre($pila);
		echo "Ordenación krsort()<br>";
		
		krsort($pila);
		recorre($pila);
		echo "Ordenación sort()<br>";
		
		sort($pila);
		recorre($pila);
		echo "Ordenación rsort()<br>";
		
		rsort($pila);
		recorre($pila);
	?>
</body>
</html>
