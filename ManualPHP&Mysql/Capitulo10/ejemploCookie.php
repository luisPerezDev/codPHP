<?php
	if ($cookie == "setcookie")
	{
		setcookie ("nombre", $tunombre);
		session_start ( );
	}
	else{
		echo "no se guardo la cookies";
	}
?>
