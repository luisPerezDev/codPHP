<?php
	// $levels = array(1, 2 , 3);
	
// 	$levels = array(
// 			         1 => 'level 1', 
// 			         2 => 'level 2', 
// 			         3 => 'level 3'
// 			       );
	
	
	$levels = array(
			1 => array(
					 	'name' => 'level 1',
						'desc' => 'This is de firs level'
					  ),
			2 => array(
						'name' => 'level 2',
						'desc' => 'You \'ve made it to level 2!'
		
						),
			3 => array(
						'name' => 'level 3',
						'desc' => 'This last level'					
					)
	);
	
	// var_dump($levels);
	// print_r($levels);
	
	// <pre> </pre> texto preformateado
	echo '<pre>', print_r($levels, true), '</pre>';
	
?>