<?php
	class direct {
		
		function __construct() {}
		
		public function director(array $info, $function) {
			include_once('class_model.php');
			
			switch ($function) {
				case "Login":
					$user = new user();
					$user->user_login($info);
					break;
				case "Index":
					if(isset($_SESSION['loggedin'])){
						session_destroy();
						$user = new user();
						$user->user_logout();
					}
					flush();
					$index = new index();
					$index->index_resp($info[0]);
					exit();
					break;
				default:
					$index = new index();
					//flush();
					$index->index_resp('');
					exit();
			}
		}
	}
?>