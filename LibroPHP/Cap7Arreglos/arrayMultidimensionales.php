<?php
	// array mutidimensional
	
	$miArray[1][2][3][4][5];
	
	// se define un arreglo colores 
	$colores = array("fuertes", "suaves");
	
	$colores["fuertes"] = array("rojo" => "FFOOOO", "verde" => "00FF00",
			                    "azul" => "0000FF");
	
	$colores["suaves"] = array("rosa" => "FE9ABC", "amarillo" => "FDF189");
	
	
	// se imprime el arreglo
	
	/*
	 * para recuperar los valores se utiliza un indice del primer array 
	 * fuertes o suaves y alguno de los dos arrays secundarios
	 */
	
	echo $colores["fuertes"]["rojo"];
	
	
	// otra forma de definir el array anterior es
	
	$colores = array("fuertes" => array("rojo" => "FFOOOO", "verde" => "00FF00",
			                    "azul" => "0000FF"), 
					 "suaves" => array ("rosa" => "FE9ABC", "amarillo" => "FDF189")	
			        );
	
	
?>