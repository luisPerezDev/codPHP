<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-ES">
<head>
<title>Intercambio de valores</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
function recorre ($numero) {
   foreach ($numero as $indice => $valor) {
      echo "$indice: $valor<br>";
   }
}	
$numero = array("uno" => 1,"dos" => 2, "tres" => 3,"cuatro" => 4);
echo ("Números<br>");
recorre($numero);
echo ("Números intercambiados<br>");
recorre(array_flip($numero)); 
?>
</body>
</html>
