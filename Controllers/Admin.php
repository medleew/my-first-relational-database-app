<?php 

class Admin extends Controller {
	public static function showFiveLatestInvoices () {
		$listTab = [];
		foreach (self::fiveLastedInvoices() as $key => $value) {
			array_push($listTab, "<tr><td>".$value['id']."</td>
		<td>".$value['name']."</td>
		<td>".$value['dateofissue']."</td></tr>");
		}
		return implode("", $listTab);
	}
}

 ?>