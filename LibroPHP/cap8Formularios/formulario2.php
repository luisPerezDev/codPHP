<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Datos Personales</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
</head>
<body id="main_body">
	<div id="form_container">
		<p>Datos introducidos:</p>
		<?php
			foreach ($_GET as $indice => $valor) {
   				echo "$indice: $valor<br>";
			}
		?>
	</div>
</body>

</html>