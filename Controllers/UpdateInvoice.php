<?php 

class UpdateInvoice extends Controller {
	public static function showAllCompagnies() {
		//print_r(self::SelectNameIDCompagnies()[0]);
		$tabList = [];
		foreach (self::SelectNameIDCompagnies() as $key => $value) {
			array_push($tabList, "<option value='".$value['id']."'>".$value['name']."</option>");
		}
		//print_r($_POST);
		return implode("", $tabList);
	}
	public static function showAllPersones() {
		$tabList = [];
		foreach (self::SelectNameIDPersons() as $key => $value) {
			array_push($tabList, "<option value='".$value['id']."'>".$value['name']."</option>");
		}
		//print_r($_POST);
		return implode("", $tabList);
	}
	public static function showInvoiceInfo($back) {
		return self::queryInvoice($_GET['id'])[$back];
	}
}

 ?>