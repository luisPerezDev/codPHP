<?php
	/*
	 * los argumentos deben de ir entre parentesis
	 * return 
	 */
	function name($name) {
		return 'My name is ' . $name;
	}
	
	/*
	 * para ser llamada la funcion es necsario poner el nombre de
	 * la funcion con los parametros necesarios
	 *
	 */
	
	$returnValue = name('Billy');
	
	echo $returnValue;
	
	echo '<br> <br>';
	
	echo name('Billy');
	
	echo '<br> <br>';
	
	/*
	 * funcion con dos parametros
	 * 
	 */
	
	function nameAndAge($name, $age) {
		return 'My name is ' . $name . ' and my age is ' . $age;
	}
	
	// se hace la llamada a la funcion
	echo nameAndAge ('Billy', '21');
	
	echo '<br> <br>';
	
	// funcion que suma dos numeros
	
	function add($num1, $num2) {
		$result = $num1 + $num2;
		return $result;
	}
	
	echo add(10, 30);
	
	
?>