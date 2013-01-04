<?php 
	if ( isset ( $_POST['name'] ) ) {
		$name = $_POST['name'] ;
		if(!empty($name)) {
			$sentence = $name . ' woke up, and make a PHP tutorial';
		}
		else {
			echo 'please enter a name. ';
		}
	}
?>

<html>
	<head>
	</head>
	
	<body>

		<form action="index.php" method="post">
			Type your name : <br> <input type = "text" name = "name"> <br>
			<input type = "submit" value = "Submit">
			
		</form>
	
		<textarea rows="7" cols="25"> <?php  echo $sentence; ?> </textarea>
		
	</body>
</html>