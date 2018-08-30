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
				case 'object':
					return self::isSetReturnValue('object');
					break;
				case 'companyid':
					return self::isSetReturnValue('companyid');
					break;
				case 'personid':
					return self::isSetReturnValue('personid');
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
