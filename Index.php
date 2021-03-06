<?php
	session_start(['cookie_lifetime' => 900]);
	$_SESSION['loggedin'] = FALSE;
	
	include_once('class_model.php');
	
	$txt = '';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if(isset($_POST['submit'])){
		$function = $_POST['submit'];
		$info = array($username, $password);
		
		$direct_class = new direct();
		$direct_class->director($info, $function);
	}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<!--site information-->
	<meta charset="UTF-8">
	<meta name="description" content="My portfolio.">													<!--To Be Continued...-->
	<meta name="keywords" content="portfolio, HTML, CSS, PHP, JS, JavaScript, Java, C#, C++, C">		<!--To Be Continued...-->
	<meta name="author" content="Alexander Ljungberg Perme">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--tabicon + linked files-->
	<link rel="icon" type="image/ico" href="/Users/Alpus96/git/portfolio/icon.ico" sizes="64x64">
	<link rel="stylesheet" type="text/css" href="main.css">
	
	<!--JS-->
	
	<!--page title-->
	<title>Portfolio</title>
</head>

<body>
	<div class="bg"></div>
	
	<!--Meny-->
	<nav class="menu">
	
	</nav>

	<!--Sidans kropp/innehåll-->
	<div class="body">
		<!--Title-->
		<h3 id="title">Please login.</h3>
		
		<!--Test echo-->
		<p id="echo_lgin"><?php
			class index {
				function index_resp($resp){echo $resp;}
			}
		?></p>
		
		<!--login form-->
		<form action='Index.php' method='post' enctype='multitype/form-data'>
			<input id='un' placeholder='Username' name='username' type='text' required autofocus maxlength='25' minlength='6'>
			<input id='pw' placeholder='Password' name='password' type='password' required maxlength='50' minlength='6'>
			<input id='reg' name='register' type='button' value='Register' method='register'>
			<input id='lgin' name='submit' type='submit' value='Login'>
		</form>
	</div>

	<!--sidans fot-->
	<div class="footer">
	
	</div>
	
</body>
</html>