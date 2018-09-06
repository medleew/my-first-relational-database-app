<?php 	

class Controller extends DB {
	public static function CreateView($viewName) {
		session_start();
		if (isset($_GET['status'])) {
			switch ($_GET['status']) {
				case 'notloggedin':
					echo "Veuillez vous connecter";
					break;
				case 'wrongpassword':
					echo "Mot de passe incorrect";
					break;
				
				case 'usernotfound':
					echo "Utilisateur non-existant";
					break;
				default:
					# code...
					break;
			}
		}
		if (strtolower($viewName) == "index" && isset($_SESSION['login']) && isset($_SESSION['password'])) {
			header('Location: /dashboard');
		}
		else if (strtolower($viewName) == 'index') {
			require_once("./Views/$viewName.php");
		}
		else {
			if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
				echo "<a href='/logout'>Logout</a>";
				require_once("./Views/$viewName.php");
			} else {
				header('Location: /?status=notloggedin');
			}
		}
	}
}

 ?>