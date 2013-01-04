<?php 
	$num = 1;
	$names = array('Alex', 'Billy', 'Dale');
	
	foreach ($names as $name) {
		echo 'Name ' . $num . ' is '. $name . '<br>';
		$num++;
	}
	
	echo '<br> <br>';
	
	$names = array('Alex' => 21, 'Billy' => 16, 'Dale' => 49);
	
	foreach ($names as $value) {
		echo 'value ' . $value. '<br>';
	}
	
	echo '<br> <br>';
	
	foreach ($names as $llave => $edad) {
		if($llave != 'Alex') {
			echo $llave . ' is '. $edad . '<br>';
		}
	}

	
	foreach ($names as $key => $edad) {
		if($key != 'Alex') {
			echo $key . ' is '. $edad . '<br>';
		}
	}
?>