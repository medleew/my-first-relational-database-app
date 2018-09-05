<?php 
class PersonsDelete extends Controller{
	public static function DeletePersonsID()
	{
		self::DeleteFromDB('persons', $_GET['id']);
		header('Location: /dashboard');
	}
}


 ?>