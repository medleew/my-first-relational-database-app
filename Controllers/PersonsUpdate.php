<?php 

class PersonsUpdate extends Controller {
	public static function showAllCompagnies() {
		//print_r(self::SelectNameIDCompagnies()[0]);
		$tabList = [];
		foreach (self::SelectNameID('compagnies') as $key => $value) {
			if ($value['id'] == self::queryPerson($_GET['id'])['companyid']) {
				array_push($tabList, "<option selected value='".$value['id']."'>".$value['name']."</option>");
			} else {
				array_push($tabList, "<option value='".$value['id']."'>".$value['name']."</option>");
			}
		}
		//print_r($_POST);
		return implode("", $tabList);
	}
}


 ?>