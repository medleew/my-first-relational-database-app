<?php 
class Login extends Controller {
		public static function VerifyLogin(){
			$userLogin = $_POST['userLogin'];
			$userPassword = sha1($_POST['userPassword']);
			$queryLogin = Login::queryLogin($userLogin);
			if (!empty($queryLogin)) {
				if ($userPassword == $queryLogin['password']) {
					echo "Good Password";
					header("Location: clients");
				} else {
					echo "Wrong password!";
					header("Location: index?status=wrongpassword");
				}
			} else {
				echo "Can't found this user";
				header("Location: index?status=usernotfound");
			}
		}
	}

 ?>