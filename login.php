<html>
<header>
	<!--site information-->
	<meta charset="UTF-8">
	<meta name="description" content="My portfolio...">
	<meta name="keywords" content="portfolio, HTML, CSS, PHP, JS, JavaScript, Java, C#, C++, C">
	<meta name="author" content="Alexander Ljungberg Perme">
	<!--tabicon! + linked files-->
	<link rel="icon" href="">
	<link rel="stylesheet" type="text/css" href="">
	<!--page title-->
	<title>Portfolio</title>
</header>

<body>
	<!--php-->
	<?php
		session_start();
	
		if($_LOGIN['login']){
			include_once('db.php');
			$username = strip_tags($_LOGIN['username']);
			$password = strip_tags($_LOGIN['password']);
		
			$username = stripslashes($username);
			$password = stripslashes($password);
		
			$username = mysqli_real_escape_string($username);
			$password = mysqli_real_escape_string($password);
		
			$password = md5($password);
		
			$sql = "SELECT * FROM " & $table & " WHERE " & $column & " = '$username' LIMIT 1";
			$query = mysqli_query($db, $sql);
			$row = mysqli_fetch_array($query);
			$id = $row['id'];
			$db_password= $row['passowrd'];
		
			if($password == $db_password){
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $id;
				header("Location: index.php");
			}else{
				echo "You entered the wrong details!";
			}
		}
		//a change
		if(!$db_password){
		
		}
	?>
	<!--Meny-->
	<nav class="menu">
	
	</nav>

	<!--Sidans kropp/innehåll-->
	<div class="body">
		<!--login form-->
		<form action="login.php" method="login" enctype="multitype/form-data">
			<input placeholder="Username" name="username" type="text" autofocus>
			<input placeholder="Password" name="password" type="text">
			<input name="login" type="submit" value="Login">
		</form>
	</div>

	<!--sidans fot-->
	<div class="footer">
	
	</div>
</body>
</html>