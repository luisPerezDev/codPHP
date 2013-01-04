INSERT INTO `posts`(`title`, `contents`) VALUES ( 'This is the firs post', 'Yes it is.' )


INSERT INTO `posts` SET 
   `title` = 'The **** post', 
   `contents` = 'Once ****, yes it is.'
	
	´´´´}``


$query = mysql_query("SELECT DISTINCT `title` FROM `posts` ");
	$query = mysql_query("SELECT `title` FROM `posts` ORDER BY `id` DESC ");
	$query = mysql_query("SELECT `title` FROM `posts` ORDER BY `id` ASC LIMIT 2 ");
	$query = mysql_query("SELECT `title` FROM `posts` LIMIT 1,3 ");
	
	// sentencia select
	$query = mysql_query("SELECT `title` FROM `posts` WHERE `id` = 3");
	$query = mysql_query("SELECT `title` FROM `posts` WHERE `id` = 3 AND `title` = 'Third post yay!' ");
	$query = mysql_query("SELECT `title` FROM `posts` WHERE `id` = 3 OR `title` = 'This is de firs yay!' ");
	
	// sentencia update
	UPDATE `posts` SET
		`title` = 'this is a post'
		`contents` = 'New contents woo'
	WHERE `id` = 6
	
	UPDATE `posts` SET
		`title` = 'this is a post'
		`contents` = 'New contents woo'
	
	// sentencia delete
	DELETE FROM `posts` WHERE `id` = 6
	DELETE FROM `posts` 
	