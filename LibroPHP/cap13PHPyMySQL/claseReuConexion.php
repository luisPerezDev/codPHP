<?php
	class ServidorBaseDatos {
		private $servidor;
		private $usuario;
		private $password;
		private $baseDatos;
		private $descriptor;
		
		
		// constructor como en java este es explicito
		function __contructor($servidor, $usuario, $password, $baseDatos) {
			$this -> servidor = $servidor;
			$this -> usuario = $usuario;
			$this->password = $password;
			$this -> baseDatos = $baseDatos;
			$this -> conectarBaseDatos();
		}
		
		private function conectarBaseDatos() {
			$this -> descriptor = mysql_connect($this -> servidor, $this -> usuario,
					                            $this -> password, $this -> baseDatos);
		}
		
		
		private function consulta($query) {
			$this->result = mysql_query($query, $this -> descriptor);
		}
		
		private function extraer_registro(){
			if ($fila = mysql_fetch_array($result, MYSQLI_)) {
				
			}	
		}
		
		
		
	}
	
	
	$servidor = "localhost";
	$usuario = "luis";
	$password = "necaxafuse";
	$baseDatos = "world";
	
	$usuario = new ServidorBaseDatos($servidor, $usuario, $password,$baseDatos);
	
	
?>