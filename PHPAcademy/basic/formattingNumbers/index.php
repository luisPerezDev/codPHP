<?php
	// $num = 25123;
	// $num = 251234567;
	$num = 251234567.1234567;
	
	/*
	 * la clase number_format da un formateo a un numero
	 * es decir lo separa por espacios coma o puntos
	 * segun especifiquemos
	 */
	
	// echo 'I have &pound; ', $num;
	// echo 'I have &pound; ', number_format($num, 3);
	// echo 'I have &pound; ', number_format($num, 2, '.', ',');
	// echo 'I have &pound; ', number_format($num, 2, ' ', ',');
	echo 'I have &pound; ', number_format($num, 2, ',', '.');
	
?>