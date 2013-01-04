<?php

	/*
		logical operators
		OR ||
		AND &&
		NOT !
	*/
	
	$num = 50;
	
	if( $num >= 1 || $num <= 100){
		echo 'Number is fine.';
	} else {
		echo 'Number must be between1 and 100, inclusive';
	}
	
	echo '<br> <br>';
	
	
	$name = 'Alex';
	$age = 30;
	
	if($name == 'Alex' || $age == 21 || $name == 25){
		echo 'Hello there';
	} else {
		echo 'Go away.';
	}
	
?>