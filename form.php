<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action='user.php' method='post' enctype='multitype/form-data'>
		<input id='un' placeholder='Username' name='username' type='text' required autofocus maxlength='25' minlength='6'>
		<input id='pw' placeholder='Password' name='password' type='password' required maxlength='50' minlength='6'>
		<input id='reg' name='register' type='button' value='Register' method='register'>
		<input id='lgin' name='submit' type='submit' value='Login'>
	</form>
</body>
</html>