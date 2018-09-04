<?php 

class PersonsDetails extends Controller {
	public static function isSetReturnValue ($returnQuery) {
		if (isset($_GET['id'])) {
			return self::queryPerson($_GET['id'])[$returnQuery];
		}
	}
	public static function query($type) {
		if (isset($_GET['id'])) {
			switch ($type) {
				case 'id':
					return self::isSetReturnValue('id');
					break;
				case 'name':
					return self::isSetReturnValue('name');
					break;
				case 'firstname':
					return self::isSetReturnValue('firstname');
					break;
				case 'phonenumber':
					return self::isSetReturnValue('phonenumber');
					break;
				case 'email':
					return self::isSetReturnValue('email');
					break;
				case 'companyname':
					return self::isSetReturnValue('companyname');
					break;
				case 'companyid':
					return self::isSetReturnValue('companyid');
					break;
				default:
					return "Not found";
					break;
			}
		} else {
			return "Null";
		}
	}
}

 ?>