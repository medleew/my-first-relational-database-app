<?php 

class DB {
	public static $host = "localhost";
	public static $dbname = "cogipapp";
	public static $username = "root";
	public static $password = "";
	private static function connect() {
		$bdd = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8", self::$username, self::$password);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $bdd;
	}
	public static function queryID($id) {
		$sqlRequest = 'SELECT * FROM persons WHERE id = :id';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->bindValue(':id', $id);
		$statement->execute();
		if (explode(' ', $sqlRequest)[0] == 'SELECT') {
			$data = $statement->fetch();
			return $data;
		}

	}
}




 ?>
