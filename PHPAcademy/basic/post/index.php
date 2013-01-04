<form action = "index.php" method="post">
	Please enteryour password : <br>
	<input type = "password" name = "password"> <br>
	<input type = "text" name = "deporte"> <br>
	<input type = "submit" value = "Submit">
	
</form>

<?php
	$password  = 'password';
	
	
	if( isset ($_POST['password'] )  && !empty($_POST['password'])) {
		
		$passwordPost = $_POST['password'];
		if($passwordPost == $password){
			echo 'Correct!';
		}
		else {
			echo 'Incorrect';
		}

	}
	
	echo '<br>El deporte escogido es : ' . $_POST['deporte'];
	
?>