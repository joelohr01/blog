<?php require_once 'dbconnection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<?php
		$posts = "SELECT * FROM posts";
		while($posts as $post) {
			echo "<li>";
			echo $post;
			echo "</li>";
		}
	?>
</body>
</html>