<?php 
		
	/*
	 * aqui se tomara un valor entero
	 */

	$num = 20;
	
	switch ($num) {
		case 10:
			echo 'Ten';
		break;
	
		case 9:
			echo 'Nine';
		break;
	
		case 8:
			echo 'eight';
		break;
	
		
		default:
			 echo 'Number not recognized';
		break;
	}

	echo '<br> <br>';
	
	/*
	 * aqui se tomara un valor de cadena
	 * ademas de que se puden agrupar
	 * varios casos 
	 */
	
	$name = 'Dale';
	
	switch ($name) {
		case 'Alex':
		case 'Billy':
		case 'Josh':
			echo 'hello there';
		default:
			echo 'Go away';
		break;
	}
	
?>