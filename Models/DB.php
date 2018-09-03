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
	public static function queryInvoice($id) {
		$sqlRequest = "
					SELECT	invoices.id, 
							invoices.dateofissue,
							invoices.object, 
							compagnies.id AS 'companyID', 
							compagnies.name AS 'companyname', 
							companiestypes.name AS 'companytype', 
							persons.name AS 'personname'
					FROM invoices
					JOIN compagnies ON compagnies.id = invoices.companyid
					JOIN companiestypes ON companiestypes.id = compagnies.typeid
					JOIN persons ON persons.id = invoices.personid
					WHERE invoices.id = :id";
		$statement = self::connect()->prepare($sqlRequest);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$data = $statement->fetch();
		return $data;

	}
	public static function fiveLastedInvoices() {
		$sqlRequest = 'SELECT invoices.id, invoices.dateofissue, invoices.object, compagnies.name AS "companyname", persons.name AS "contactname", companiestypes.name AS "companytype"
						FROM invoices
						JOIN compagnies ON compagnies.id = invoices.companyid
						JOIN persons ON persons.id = invoices.personid
						JOIN companiestypes ON companiestypes.id = compagnies.typeid
						ORDER BY dateofissue DESC LIMIT 5';
		//$sqlRequest = 'SELECT * FROM invoices';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
	public static function AllInvoices() {
		$sqlRequest = 'SELECT invoices.id, invoices.dateofissue, invoices.object, compagnies.name AS "companyname", persons.name AS "contactname", companiestypes.name AS "companytype"
						FROM invoices
						JOIN compagnies ON compagnies.id = invoices.companyid
						JOIN persons ON persons.id = invoices.personid
						JOIN companiestypes ON companiestypes.id = compagnies.typeid
						ORDER BY dateofissue DESC';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
	public static function SelectNameIDCompagnies() {
		$sqlRequest = 'SELECT compagnies.name, compagnies.id FROM compagnies';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
	public static function SelectNameIDPersons() {
		$sqlRequest = 'SELECT persons.name, persons.id FROM persons';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
 	public static function queryLogin($username) {
		$sqlRequest = 'SELECT username, password FROM users WHERE username = :username';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->BindValue(':username', $username);
		$statement->execute();
		$data = $statement->fetch();
		return $data;
	}
}




 ?>
