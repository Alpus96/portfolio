<?php	
	function login(){
	$resp = "Incorrect details!";
	resp();
	if($_LOGIN['login']){
		include_once('db.php');
		$username = strip_tags($_LOGIN['username']);
		$password = strip_tags($_LOGIN['password']);

		$username = stripslashes($username);
		$password = stripslashes($password);

		$username = mysqli_real_escape_string($username);
		$password = mysqli_real_escape_string($password);

		/*$password = md5($password);

		$sql = "SELECT * FROM " & $table & " WHERE " & $column & " = '$username' LIMIT 1";
		$query = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($query);
		$id = $row['id'];
		$db_password= $row['passowrd'];*/
		
		$db_password = getPW($username);

		if($password == $db_password && $db_password != ""){
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $id;
			header("Location: index.php");
			$resp = "Incorrect details!";
			resp();
		}else{
			$resp = "Incorrect details!";
			resp();
		}
	}		
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<!--site information-->
	<meta charset="UTF-8">
	<meta name="description" content="My portfolio."><!--To Be Continued...-->
	<meta name="keywords" content="portfolio, HTML, CSS, PHP, JS, JavaScript, Java, C#, C++, C"><!--To Be Continued...-->
	<meta name="author" content="Alexander Ljungberg Perme">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--tabicon + linked files-->
	<link rel="icon" type="image/ico" href="/Users/Alpus96/git/portfolio/icon.ico" sizes="64x64">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="php">
		<!--php/JS?-->
	<!--page title-->
	<title>Portfolio</title>
</head>

<body>
	<div class="bg"></div>
	<!--PHP-->
	<!--<?php include 'login.php'; ?>-->
	
	<!--Meny-->
	<nav class="menu">
	
	</nav>

	<!--Sidans kropp/innehåll-->
	<div class="body">
		<!--Title-->
		<h3 id="title">Please login.</h3>
		<!--PHP echo-->
		<p id="echo_lgin"><?php function resp(){echo $resp;} ?></p>
		<!--login form-->
		<form name="login" action="login.php" method="post" enctype="multitype/form-data">
			<input id="un" placeholder="Username" name="username" type="text" required autofocus maxlength="25" minlength="6">
			<input id="pw" placeholder="Password" name="password" type="password" required maxlength="50" minlength="6">
			<input id="reg" name="register" type="button" value="Register" method="register">
			<input id="lgin" name="login" type="submit" value="Login">
		</form>
	</div>

	<!--sidans fot-->
	<div class="footer">
	
	</div>
	
</body>
</html>