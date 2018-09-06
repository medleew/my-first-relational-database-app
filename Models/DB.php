<?php 

class DB {
	public static $host = "sql7.freemysqlhosting.net";
	public static $dbname = "sql7255431";
	public static $username = "sql7255431";
	public static $password = "rCTt4mk35H";
	private static function connect() {
		$bdd = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8", self::$username, self::$password);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $bdd;
	}
	/* ------> USELESS ?
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
	*/
	/*-------------------- INVOICES---------------------------*/
	public static function queryInvoice($id) {
		$sqlRequest = "
					SELECT	invoices.id, 
							invoices.dateofissue,
							invoices.object, 
							compagnies.id AS 'companyid', 
							compagnies.name AS 'companyname', 
							compagnies.address AS 'companyaddress',
							companiestypes.name AS 'companytype', 
							persons.name AS 'personname',
							persons.id AS 'personsid'
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
						ORDER BY invoices.dateofissue DESC LIMIT 5';
		//$sqlRequest = 'SELECT * FROM invoices';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
	public static function AllInvoices() {
		$sqlRequest = 'SELECT invoices.id, invoices.dateofissue, invoices.object, compagnies.name AS "companyname", persons.name AS "contactname", companiestypes.name AS "companytype", compagnies.id AS "companyid"
						FROM invoices
						JOIN compagnies ON compagnies.id = invoices.companyid
						JOIN persons ON persons.id = invoices.personid
						JOIN companiestypes ON companiestypes.id = compagnies.typeid
						ORDER BY id DESC';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
	public static function updateInvoice($id, $object, $companyid, $personid) {
		$sqlRequest = 'UPDATE invoices SET object = :object, companyid = :companyid, personid = :personid WHERE id = :id';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->BindValue(':id', $id);
		$statement->BindValue(':object', $object);
		$statement->BindValue(':companyid', $companyid);
		$statement->BindValue(':personid', $personid);
		$statement->execute();
	}
	public static function AddInvoiceToDB($dateofissue, $object, $companyID, $contactperson) {
		$sqlRequest = 'INSERT INTO invoices (dateofissue, object, companyid, personid) 
						VALUES (:dateofissue, :object, :companyid, :personid)';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->bindParam(':dateofissue', $dateofissue);
		$statement->bindParam(':object', $object);
		$statement->bindParam(':companyid', $companyID);
		$statement->bindParam(':personid', $contactperson);
		$statement->execute();	
	}
	/*-------------------- PERSONS---------------------------*/
	public static function AddPersonsToDB($name, $firstname, $phonenumber, $email, $companyid) {
		$sqlRequest = 'INSERT INTO persons (name, firstname, phonenumber, email, companyid) 
						VALUES (:name, :firstname, :phonenumber, :email, :companyid)';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->bindParam(':name', $name);
		$statement->bindParam(':firstname', $firstname);
		$statement->bindParam(':phonenumber', $phonenumber);
		$statement->bindParam(':email', $email);
		$statement->bindParam(':companyid', $companyid);
		$statement->execute();	

	}
	public static function queryInvoicesPersonne($id) {
		$sqlRequest = 'SELECT invoices.id, invoices.dateofissue, invoices.object 
						FROM invoices
						WHERE invoices.personid = :id';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->BindValue(':id', $id);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
	public static function updatePerson($id, $name, $firstname, $email, $phonenumber, $companyid) {
		$sqlRequest = 'UPDATE persons 
						SET name = :name, 
							firstname = :firstname, 
							email = :email, 
							phonenumber = :phonenumber,
							companyid = :companyid
						WHERE id = :id';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->BindValue(':id', $id);
		$statement->BindValue(':name', $name);
		$statement->BindValue(':firstname', $firstname);
		$statement->BindValue(':email', $email);
		$statement->BindValue(':phonenumber', $phonenumber);
		$statement->BindValue(':companyid', $companyid);
		$statement->execute();
	}
	public static function queryPerson($id) {
		$sqlRequest = 'SELECT persons.*, compagnies.name AS "companyname"
						FROM persons
						LEFT JOIN compagnies ON compagnies.id = persons.companyid
						WHERE persons.id = :id';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->BindValue(':id', $id);
		$statement->execute();
		$data = $statement->fetch();
		return $data;
	}
	public static function fiveLastedPersons() {
		$sqlRequest = 'SELECT persons.id, persons.name, persons.firstname, persons.email, persons.companyid,compagnies.name AS "companyname" 
					FROM persons
					LEFT JOIN compagnies ON compagnies.id = persons.companyid ORDER BY id DESC LIMIT 5';
		//$sqlRequest = 'SELECT * FROM invoices';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
	public static function AllPersons() {
		$sqlRequest = 'SELECT persons.id, persons.name, persons.firstname, persons.email, persons.companyid,compagnies.name AS "companyname" 
					FROM persons
					LEFT JOIN compagnies ON compagnies.id = persons.companyid ORDER BY id DESC';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
	public static function SelectNameID($table) {
		$sqlRequest = 'SELECT name, id FROM '.$table.'';
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
	public static function DeleteFromDB($table, $id) {
		$sqlRequest = 'DELETE FROM '.$table.' WHERE id = :id';
		$statement = self::connect()->prepare($sqlRequest);
		$statement->BindValue(':id', $id);
		$statement->execute();	
	}
}




 ?>
