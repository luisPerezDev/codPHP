<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Revista Digital</title>
</head>
<body>	
	<?php
	$menu = array (1 => "Editorial", 2 => "Opinión", 3 => "Regional", 4 => "Nacional");
	echo ("--Revista Digital--<br />");
	echo ("--MENU--<br />");
	foreach ($menu as $indice => $valor) {
		echo ("<a href=\"revista.php?menu=$indice\">$valor</a><br>");
	}
	echo ("<p>--NOTICIAS--</p>");
	if (isset($_GET["menu"])) {
	switch ($_GET["menu"]) {
		case 1:
			echo ("Editorial");
			break;
		case 2:
			echo ("Opinión");
			break;
		case 3:
			echo ("Regional");
			break;
		case 4:
			echo ("Nacional");
			break;
		default:
			echo ("Noticias de Portada");
			break;	
	}
}
?>
</body>
</html>