<?php 

class UpdateInvoice extends Controller {
	public static function showAllCompagnies() {
		//print_r(self::SelectNameIDCompagnies()[0]);
		$tabList = [];
		foreach (self::SelectNameID('compagnies') as $key => $value) {
			if ($value['id'] == self::queryInvoice($_GET['id'])['companyID']) {
				array_push($tabList, "<option selected value='".$value['id']."'>".$value['name']."</option>");
			} else {
				array_push($tabList, "<option value='".$value['id']."'>".$value['name']."</option>");
			}
		}
		//print_r($_POST);
		return implode("", $tabList);
	}
	public static function showAllPersones() {
		$tabList = [];
		foreach (self::SelectNameID('persons') as $key => $value) {
			if ($value['id'] == $_GET['id']) {
			array_push($tabList, "<option selected value='".$value['id']."'>".$value['name']."</option>");
			} else {
			array_push($tabList, "<option value='".$value['id']."'>".$value['name']."</option>");
			}
		}
		//print_r($_POST);
		return implode("", $tabList);
	}
	public static function showInvoiceInfo($back) {
		return self::queryInvoice($_GET['id'])[$back];
	}
	public static function checkUpdate() {
		self::updateInvoice($id, $object, $companyid, $personid);
	}
}

 ?>