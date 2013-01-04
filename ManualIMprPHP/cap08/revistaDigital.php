<html>
    
    <head> 
        <title> REVISTA DIGITAL</title>
    </head>
    <body> 
        <?php
        $menu = array(
            1 => "Editorial",
            2 => "Opinion",
            3 => "Regional",
            4 => "Nacional",
        );

        echo '--REVISTA DIGITAL--<br />';
        echo '--MENU--<br />';

                foreach ($menu as $key => $value) {
                    echo "<a href = \" revistaDigital.php?menu=$key \"> $value  </a> <br /> ";
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