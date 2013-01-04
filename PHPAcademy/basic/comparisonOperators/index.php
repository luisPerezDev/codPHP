<?php

	/*
		==
		!=
		>
		<
		>=
		<=
	*/
	$age = 21;
	$status = false;
	
	if($age >= 21) {
		$status = true;
	}
	
	if($status == true){
		echo 'You\'re allowed.';
	}else if ($status == false) {
		echo 'Sorry, not allowed';
	}
?>