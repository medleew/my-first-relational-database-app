<?php 

class Clients extends Controller {
	public static function isSetReturnValue ($id, $returnQuery) {
		if (isset($id)) {
			return self::queryID($_GET['id'])[$returnQuery];
		}
	}
	public static function query($type) {
		if (isset($_GET['id'])) {
			switch ($type) {
				case 'id':
					return self::isSetReturnValue($_GET['id'], 'id');
					break;
				case 'name':
					return self::isSetReturnValue($_GET['id'], 'name');
					break;
				case 'firstname':
					return self::isSetReturnValue($_GET['id'], 'firstname');
					break;
				case 'phonenumber':
					return self::isSetReturnValue($_GET['id'], 'phonenumber');
					break;
				case 'email':
					return self::isSetReturnValue($_GET['id'], 'email');
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