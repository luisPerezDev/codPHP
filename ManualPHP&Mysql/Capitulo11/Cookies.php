<?php 

echo "Bienvenido a nuestro portal.";
echo "<br><br>";
echo "Usted usa el navegador: ";
echo $HTTP_USER_AGENT;
echo "<br><br>";
echo "Su dirección IP es: ";
echo $REMOTE_ADDR;
echo "<br><br>";
echo "El puerto que utiliza para conectarse al servidor web es: ";
echo $SERVER_PORT;

?>