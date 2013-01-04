<?php
	// se genera un numero por medio de la funcion rand();
	$rand = rand();
	
	// se imprime por pantalla el numero generado
	echo $rand . '<br><br>';
	
	
	// para generar un numero aleatorio que se encuentre
	// en un intervalo se pone el intervalo como
	// parametros
	 
	$rand = rand(1 , 6);
	echo 'You have rolled a '. $rand;
?>