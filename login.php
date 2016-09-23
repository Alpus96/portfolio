<?php
	session_start();
	
	include_once('login.html');
	
	function login{
		$resp = "Incorrect details!";
		function resp();
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
				$resp = "Incorrect details!";
				function resp();
			}
		}
	}
	
	function register(){
		
	}
?>