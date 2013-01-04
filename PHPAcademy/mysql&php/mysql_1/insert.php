<?php 

include_once ('resources/init.php');

// isset checa que las variables no esten vacios 
// en este caso se utiliza para ver si rellenamos los campos
// de nuestro formulario

if ( isset( $_POST['title'],  $_POST['post'] ) ) {
	// se procedea a pasar a variables lo que se ha escrito en
	// nuestro formulario
	
// 	$title = $_POST['title'];
// 	$contents = $_POST['post'];

	// cambios realizados con htmlentities
	// htmlentities convierte caracters a entidades html
	
// 	$title = mysql_real_escape_string( htmlentities( $_POST['title'] ) );
// 	$post = mysql_real_escape_string ( htmlentities( $_POST['post'] ) );
	
	$title = htmlentities( $_POST['title'] );
	$post = htmlentities( $_POST['post'] ) ;
	
	
	echo $title;
	echo post;
	
	
	// cambios realizados con htmlentities
	$query =  "INSERT INTO `posts` SET
			`title`    = '{ $title}'
			`contents` = '{ $post}' " ;

	//sql injections
   	
// mysql_query( "INSERT INTO `posts` SET
//  	`title` = '{$_POST['title']}',
//   	`contents` = '{$_POST['post']}' " );

// uso de htmlentities
	
	
// 	mysql_query( "INSERT INTO `posts` SET
// 	`title` = '$title',
// 	`contents` = '$contents' " );

	
// 	$q = mysql_query(" SELECT 'contents' FROM 'post' WHERE 'id' = 4");
// 	$r = mysql_fetch_assoc($q);
	
	mysql_query($query);
	
}  	// fin de if

?>

<html>

<head>
<title>Add a post!</title>

</head>

<body>

	<form method="post" action="">

		<div>
			<label For='title'> Title </label> <input type="text" name="title"
				id="title" />
		</div>

		<div>
			<label For='post'> Post </label>
			<textarea name="post" id="post" rows=15 cols="50"> </textarea>
		</div>

		<div>
			<input type="submit" value="Post" align = "center"/>
		</div>

	</form>

</body>
</html>