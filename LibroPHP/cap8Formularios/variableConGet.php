<<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title> Variables con Get</title>
</head>

<body>
	<?php 
		echo "Variables pasadas con GET : <br />";
		
		foreach ($_GET as $indice  => $valor)
			echo "$indice : $valor";	
	?>
</body>

</html>
