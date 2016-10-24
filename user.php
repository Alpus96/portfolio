<?php
	// Works! With login form:
		/*<form action='user.php' method='post' enctype='multitype/form-data'>
			<input id='un' placeholder='Username' name='username' type='text' required autofocus maxlength='25' minlength='6'>
			<input id='pw' placeholder='Password' name='password' type='password' required maxlength='50' minlength='6'>
			<input id='reg' name='register' type='button' value='Register' method='register'>
			<input id='lgin' name='submit' type='submit' value='Login'>
		</form>*/
	// in login.php
	
	class user{
		function user_login($info) {
			include_once('class_model.php');
			
			$username = $info[0];
			$password = $info[1];
		
			$unc = 'Alpus96';
			$pwc = md5('Alpus96');
		
			//string openssl_random_pseudo_bytes ( int $length [, bool &$crypto_strong ] )
		
			if($password == $pwc && $username == $unc) {
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				
				//include('portfolio.php');
				//$index = new index();
				//$index->confirm_login();
				
				header('Location: http://localhost/~Alpus96/portfolio/portfolio.php');
			} else {
				//include('Index.php');
				$index = new index();
				$index->index_resp('Enter correct cridentials!');
				//header('Location: http://localhost/~Alpus96/portfolio/Index.php');
				exit();
			}

			// Setup mysql database and connect before rewriting. [user_id, user_name, password_hash, password_salt]
			
				//Login function verifying towards server and redirecting accordingly.
		}
		
		function user_logout(){
			header('Location: http://localhost/~Alpus96/portfolio/index.php');
		}
	}
?>