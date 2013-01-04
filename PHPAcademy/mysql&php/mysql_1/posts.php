<?php 

	include_once ('resources/init.php');
	
	$query = mysql_query ( " SELECT `id`, `title`, `contents` FROM `posts`  " );
	
	$query = mysql_query("SELECT COUNT(1) FROM `posts` ");
	$count = mysql_result($query, 0);
	
	
	$col = mysql_fetch_field($result);
	
	while ( $row = mysql_fetch_assoc($query) ) {
		?>
			<h2> <a href="posts.php?id=  <?php echo $row['id']; ?> " >  <?php echo $row['title']; ?> </a> </h2>
			<p> <?php echo $row['contents']; ?> </p>
		
		<?php 
	}	
		?>
		
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Post List</title>
</head>

    <body>
    
    <?php
		
	?>
    </body>
</html>