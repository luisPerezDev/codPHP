<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel ="stylesheet" type="text/css" href="css/view.css" media="all">
    </head>
    <body id="main_body" >
        <div id="form_container">
            <h1><a>Datos Personales</a></h1>

            <form id="formulario" class="appnitro"  method="get" action="formulario2.php">

                <div class="form_description">
                    <h2>Datos Personales</h2>
                    <p>Introduzca sus datos personales</p>
                </div>						
                <ul >
                    <li id="li_1" >
                        <label class="description" for="element_1">Nombre </label>

                        <div>
                            <input id="nombre" name="nombre" class="element text medium" type="text" maxlength="255"    value=""/> 
                        </div> 

                    </li>

                    <li id="li_2" >
                        <label class="description" for="element_2">Apellidos </label>

                        <div>
                            <input id="apellidos" name="apellidos" class="element text medium" type="text" maxlength="255" value=""/> 
                        </div> 

                    </li>
                    <li id="li_3" >
                        <label class="description" for="element_3">Correo electrónico </label>
                        <div>
                            <input id="correo" name="correo" class="element text medium" type="text" maxlength="255" value=""/> 
                        </div> 
                    </li>		
                    <li id="li_4" >
                        <label class="description" for="element_4">Estado civil </label>
                        <span>
                            <select id="estado" name="estado" class="element radio" />
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Viudo">Viudo</option>
                            </select>
                        </span> 
                    </li>		
                    <li id="li_5" >
                        <label class="description" for="element_5">Número de hijos </label>
                        <span>
                            <input id="element_5_1" name="hijos" class="element radio" type="radio" value="1" />
                            <label class="choice" for="element_5_1">1</label>
                            <input id="element_5_2" name="hijos" class="element radio" type="radio" value="2" />
                            <label class="choice" for="element_5_2">2</label>
                            <input id="element_5_3" name="hijos" class="element radio" type="radio" value="3" />
                            <label class="choice" for="element_5_3">3</label>
                        </span> 
                    </li>		
                    <li id="li_6" >
                        <label class="description" for="element_6">Aficiones </label>
                        <span>
                            <input id="element_6_1" name="aficiones[]" class="element radio" type="checkbox" value="Informática" />
                            <label class="choice" for="element_6_1">Informática</label>
                            <input id="element_6_2" name="aficiones[]" class="element radio" type="checkbox" value="Ilusionismo" />
                            <label class="choice" for="element_6_2">Ilusionismo</label>
                            <input id="element_6_3" name="aficiones[]" class="element radio" type="checkbox" value="Astronomía" />
                            <label class="choice" for="element_6_3">Astronomía</label>
                        </span> 
                    </li>
                    <li class="buttons">
                        <input id="saveForm" class="button_text" type="submit" name="boton" value="Enviar" />
                    </li>
                </ul>
            </form>	
            <div id="footer">
                Generated by <a href="http://www.phpform.org">pForm</a>
            </div>
        </div>
    </body>
</html>