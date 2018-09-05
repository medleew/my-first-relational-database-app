<?php 
class PersonsAdd extends Controller {
	public static function VerifyAdd(){
		$name = $_POST['name'];
		$firstname = $_POST['firstname'];
		$phonenumber = $_POST['phonenumber'];
		$email = $_POST['email'];
		$companyid = $_POST['companyid'];
		self::AddPersonsToDB($name, $firstname, $phonenumber, $email, $companyid); 
		header("Location: /dashboard");
	}	
}


 ?>