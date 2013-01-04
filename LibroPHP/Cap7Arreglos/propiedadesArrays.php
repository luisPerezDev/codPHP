<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Propiedades de los arreglos</title>
</head>
    <body>
    <?php
		/*
		 * propiedad count cuenta el numero 
		 * de elementos que contiene un array
		 */
    
     	$colores = array("azul","rayas","gris","blanca", "verde");
     	echo "El tamaño del arreglo miArray es : " . count($colores) . "<br />";
     	
     	/**
     	 * funcion sizeof 
     	 * hace lo mismo que count()
     	 */
     	echo "El tamaño del arreglo colores es : " . sizeof($colores) . "<br />";
    	
     	
     	/*
     	 * funcion in_array()
     	 * busca de ntro de un array un valor que es pasdo como
     	 * parametro y si lo encuentra devuelve el valor true
     	 * en caso contrario devuelve el valor false
     	 * Toma dos argumentos el valor a buscar y el array
     	 * donde buscar
     	 * 
     	 * in_array($needle, $haystack)
     	 * $needle valor a buscar
     	 * $haystack array donde buscar el valor
     	 */
     	
     	// se seguira ocupando $miArray
     	if(in_array("azul",$colores)){
			echo "se ha encontrado el valor ";
		}
		else {
			echo "no se ha encontrado el valor";
		}
		
		// se muestra el arreglo antes de la eliminacion
		echo "<br>Arreglo sin eliminacion <br> <br>";
		
		foreach ($colores as $val){
			echo "El valor del elemento  es  $val <br />";
		}
		
		/* 
		 * funcion para borrar elementos de un arreglo
		 * 
		 * unset(arreglo[indice]) 
		 */
		
		unset($colores[2]); // se borrara gris
		
		echo "<br /> <br />";
		
		echo "<br>Arreglo despues de la eliminacion <br> <br>";
		
		
		// se muestra el arreglo
		foreach ($colores as $val){
			echo "El valor del elemento  es  $val <br />";		
		}
		

	?>
    </body>

</html>