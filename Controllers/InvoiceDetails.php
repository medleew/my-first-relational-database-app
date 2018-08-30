<?php 

class InvoiceDetails extends Controller {
	public static function isSetReturnValue ($returnQuery) {
		if (isset($_GET['id'])) {
			return self::queryInvoice($_GET['id'])[$returnQuery];
		}
	}
	public static function query($type) {
		if (isset($_GET['id'])) {
			switch ($type) {
				case 'id':
					return self::isSetReturnValue('id');
					break;
				case 'dateofissue':
					return self::isSetReturnValue('dateofissue');
					break;
				case 'companyname':
					return self::isSetReturnValue('companyname');
					break;
				case 'companytype':
					return self::isSetReturnValue('companytype');
					break;
				case 'personname':
					return self::isSetReturnValue('personname');
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
