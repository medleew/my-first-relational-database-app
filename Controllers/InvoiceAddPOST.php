<?php 
class InvoiceAddPOST extends Controller {
	public static function VerifyAdd(){
		$date = $_POST['date'];
		$object = $_POST['object'];
		$companyID = $_POST['company'];
		$contactperson = $_POST['contactperson'];
		self::AddInvoiceToDB($date, $object, $companyID, $contactperson); 
		header("Location: /dashboard");
	}
}
 ?>