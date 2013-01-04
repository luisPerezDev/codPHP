<?php
	// implode arrays
	// implode($glue, $pieces)
	
	// $names = array ('Alex', 'Billy', 'Tabby');
	// print_r($names);
	
	// echo implode(', ' , $names);
	
	
	// $name_str = null;
	
	
	// se imprimira una linea que termian con una coma
	// en el siguiente foreach se 
	// la problematica
// 	foreach ($names as $name){
// 		$name_str .= $name . ', ';
// 	}
	
// 	foreach ($names as $key => $name) {
// 		$name_str .= $name;
// 		// este if obedece a que la 
// 		// cadena no debe terminar 
// 		// con una coma 
// 		if ($key != (count($names) - 1) ) {
// 			$name_str .= ', ';
// 		}
// 	}
	
// 	echo $name_str;

	// collect and process data
	$name = 'alex';
	$email = 'alex@phpacademy.org';
	$message = 'Really great site, love it';
	
	

	$data = array(
		'name' 		=> $name,
		'email' 	=> $email,
		'message' 	=> $message		
	);
	
	// print_r($data);
	
// 	$sql = "
// 			INSERT INTO 'table' ('name', 'email', 'message')
// 			VALUES ('$name', '$email', '$message')
// 	";

	// $fields_sql = implode(', ', array_keys($data) );
	$fields_sql = '`' . implode ('`, `' , array_keys($data ) ) . '`';
		
	// die($fields_sql);
		
	$values_sql = '\'' . implode ('\', \'' , $data  ) . '\'';
	
	// VALUES ('$name', '$email', '$message')
	
	$sql = "
						
	INSERT INTO 'table' ($fields_sql)
	VALUES ($values_sql)
	// VALUES ('$name', '$email', '$message')
	";
	
		
	// la funcion implode nos sirve para
	// poder crear consultas y ejecutarlas
	// en MySQL
	
	echo $sql;
	
?>