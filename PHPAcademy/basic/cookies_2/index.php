<?php
	$exp = time() + 8400;
	$exp_unset = time() - 8400;
	
	// unset cookie
	setcookie("name", "", $exp_unset);
	
	if(isset($_COOKIE ['name'] ) )
		echo "cookie is set";
	else
		echo "cookie is not set";	
?>