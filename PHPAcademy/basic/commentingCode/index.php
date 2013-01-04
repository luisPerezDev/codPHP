<form action = "index.php" method="post">
	Name : <br>
	<input type = "text" name = "name"> <br>
	<input type = "submit" name = "submit"> 
	
</form>

<?php
	

	/*
	 * Author : Alex James Garet
	* Date : 30/03/11
	*/
	
	// set variable num to value 1
	$num = 1;

	if(isset($_POST['name'])) { // if name exists (form submitted)
		$name = htmlentities( $_POST['name'] );	// grab POSTed vareaible name, apply security
		
		// check if name variable es empty
		if(!empty($name)) {
			$nameExp = explode(' ', $name);
			foreach ($nameExp as $namePart) {
				echo 'Part ' . $num . ' of name is ' . $namePart . '<br>';
				$num++;
			}
		} else {
			echo 'Please enter name';
		}
	}

	

?>