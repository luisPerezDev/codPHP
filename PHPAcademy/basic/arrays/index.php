<?php
	
	/*
	 * array
	 * los valores iran separados por comas
	 * y despues de la palabra reservada array
	 * $names = array('', '', '', '',);
	 */
	
	$names = array( 'Alex', 'Billy', 'Dale');
	
	/*
	 * se pueden imprimir de manera individual 
	 * los valores del arreglo
	 * 
	 * nombreArray[posicion];
	 * 
	 * la posicion debera ser de tipo entero
	 * 
	 */
	
	echo $names[2];
	echo '<br> <br>';
	

	/*
	 * se pueden asignar valores a 
	 * una posicion especifica
	 * 
	 * esto se hace por medio de 
	 * => seguido de este la posicion
	 * valorArreglo => posicionEspecifica
	 * 
	 * nombreArreglo[valorObjeto] = posicionEspecifica
	 * 
	*/
	
	$names = array( 'Alex'=>21, 'Billy'=>16, 'Dale'=>49);
	
	$names['josh'] = 18;
		

?>
