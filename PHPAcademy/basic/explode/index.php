<?php
	// uso de la funcion explode
	
	$likes = 'eating, drinking, the gym, nothing';

	
	// explode($delimiter, $string)
	$likes = explode(',', $likes);
	
	print_r($likes);
	
	echo '<br>';
	
	foreach ($likes as $key => $like){
		echo $like, ' atPosition ', $key;
	}
	
	echo '<br>';
	
	foreach ($likes as $key => $like){
		echo '<a href = "#" >', $like, '</a><br>';;
	}
	
	// al poner como deimitador un expao puede ocurrir
	// que no se presenten bien los datos
	
	
?>