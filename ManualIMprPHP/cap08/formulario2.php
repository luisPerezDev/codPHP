<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <p> Datos introducidos </p>
      
        <?php
        // put your code here
        foreach ($_GET as $key => $value) {
            echo "$key : $value <br>";
        }
        
        // se busca mostrar lo que el usuario escogio
        // en las casillas de verificacion
        echo '<H2> AFICIONES</H2>';
        
        // se le pasa como argumento a get el nombre de 
        // el array de las casillas de verificacion
        
        // no olvidar declarar las casillas de evrificacion en 
        // el formulario como array
        // <input type = "checkbox" name = "aficiones[]" value = "informatica">
        $aficiones = $_GET["aficiones"];
        
        foreach ($aficiones as $key => $value) {
            echo "$key: $value <br />";
        }
        
        ?>
    </body>
</html>