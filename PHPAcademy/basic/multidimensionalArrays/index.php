<?php
	$names = array(
		'Alex' => array('Age' => 21, 'Hair' => 'Blonde', 'Food'=> array('Pizza','Pasta') ),
		'Billy' => array('Age' => 16, 'Hair' => 'Brown'),
		'Dale' => array('Age'=> 49, 'Hair'=> 'Blonde')
	);
	
	
	/*
	 * formas de acceder a los valores de un array multidimensional
	 * se debera de accesar a los datos de manera
	 * externa - interna
	 */
	
	echo $names['Dale']['Hair'];
	
	echo '<br><br>';
	
	echo $names['Alex']['Age'];
	
	echo '<br><br>';
	
	echo $names['Alex']['Food']['0'];
	
?>
