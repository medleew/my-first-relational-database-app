<?php 
class PersonUpdatePOST extends Controller {
	public static function UpdatePerson() {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$companyid = $_POST['company'];
		//self::updatePerson($id, $name, $firstname, $email, $phonenumber, $companyid); 
		header("Location: /persons-details/$id");
	}
}


 ?>