<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Datos Personales</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
</head>
<body id="main_body" >
	
	<div id="form_container">

	
		<h1><a>Datos Personales</a></h1>
					<div class="form_description">
			<h2>Datos Personales</h2>
			<p>Introduzca sus datos personales</p>
		</div>						
		<div>
			 <?php
			foreach ($_GET as $indice => $valor) {
				echo "$indice: $valor<br />";
			}
			echo "<h2>AFICIONES:</h2>";
			$aficiones = $_GET["aficiones"];
			foreach ($aficiones as $indice => $valor) {
				echo "$indice: $valor<br />";
			}
			?>			
		</div> 	
	</body>
</html>