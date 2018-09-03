<?php 
class UpdateInvoicePOST extends Controller {
	public static function VerifyUpdateInvoice(){
		$invoiceID = $_POST['id'];
		$object = $_POST['object'];
		$companyID = $_POST['company'];
		$contactperson = $_POST['contactperson'];
		self::updateInvoice($invoiceID, $object, $companyID, $contactperson); 
		header("Location: /facture-details/$invoiceID");
	}
}
 ?>