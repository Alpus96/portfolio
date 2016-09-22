<?php
if(isset($session)){
	//Create logout
	$logout = 0;
	if($logout == 1){
		$session_start();
		$session_destroy();
	}
	//Create CMS
	
}else{
	header("Location: login.php");
}

?>

<html>
	
</html>