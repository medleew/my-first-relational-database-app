<?php 
class DeleteInvoice extends Controller{
	public static function DeleteInvoiceID()
	{
		self::DeleteFromDB('invoices', $_GET['id']);
		header('Location: /dashboard');
	}
}

 ?>