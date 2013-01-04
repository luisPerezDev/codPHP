<?php
	
	// se crea uan variable llamada password
	$password = 'password';
	
	// se hace uso de la sentencia de condicion if
	
	/*  de acuardo al resultado de la evaluacion se muestra en
	 * un mensaje u otro
	 */
	
	if($password == 'password'){
		echo 'This is the correct password!';
	} 
	else{
		echo 'This is the wrong password!';
	}
	
	echo '<br> <br>';
	
	$age = 18;
	
	if($age >= 21){
		echo 'You\'re old enought to drink USA';
	} else if($age >= 18) {
		echo 'You\'re old enought to drink in UK';
	} else {
		echo 'You\'re old enought to drink in USA or the UK';
	}
	
?> 













