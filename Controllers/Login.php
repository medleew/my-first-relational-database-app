<?php 
class Login extends Controller {
		public static function VerifyLogin(){
			if ($_POST) {
				$userLogin = $_POST['userLogin'];
				$userPassword = sha1($_POST['userPassword']);
				$queryLogin = Login::queryLogin($userLogin);
				if (!empty($queryLogin)) {
					if ($userPassword == $queryLogin['password']) {
						session_start();
						$_SESSION['login'] = $userLogin;
						$_SESSION['password'] = $userPassword;
						header("Location: dashboard");
					} else {
						echo "Wrong password!";
						header("Location: index?status=wrongpassword");
					}
				} else {
					echo "Can't found this user";
					header("Location: index?status=usernotfound");
				}
			} else {
				header("Location: index?status=notloggedin");
			}
		}
	}

 ?>