<?php 

class Admin extends Controller {
	public static function test() {
		if (isset($_GET['id'])) {
			echo $_GET['id']."<br>";
			echo self::queryID($_GET['id'])['username']."<br>";
			print_r(self::queryID($_GET['id']));
		}
	}
}

 ?>