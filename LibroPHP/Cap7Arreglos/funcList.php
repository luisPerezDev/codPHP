<?php
	// uso de la funcion list()
	/*
	 * esta funcion recupera los datos de un array y 
	 * los almacena en una lista de variables
	 * El numero de variables que contiene la funcion 
	 * debe de ser igual al numero de datos lamacenado 
	 * en el array.  
	 */

	$miArray = array(23, 45, "hola mundo");
	
	// se usa la funcion list() estre parentesis
	// se ponen las variables a las que seran
	// copiados los valores contenidos dentro del
	// array 
	
	list($a, $b, $c) = $miArray;
	
	// se muestran en pantalla las variables
	echo "los numeros del array son: $a, $b, y $c";
	
	
	/*
	 * funcion range()
	 * 
	 * devuelve un array con valores numericos, que van
	 * desde un numero de inicio hasta un numero final
	 *
	 */ 
	
	$low = 2;
	$high = 5;
	
	$miArray = array(10,20,30,40,50,60,70,80,90,100);
	
	
	$miArray = range($low, high);
	
	
// 	for ($i = 0; $i < count($miArray); $i++){
// 		echo "<br />El valor del elemento  es  $miArray[$i] <br />";
// 	}
	
	
 	foreach ($miArray as $val){
 		echo "<br />El valor del elemento  es  $val <br />";	
 	}
	
 	
 	
	echo "<br /> <br /> Fin del programa <br />";
	
?>