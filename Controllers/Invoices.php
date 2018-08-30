<?php 

class Invoices extends Controller {
	public static function showAllInvoices () {
		$listTab = [];
		foreach (self::AllInvoices() as $key => $value) {
			array_push($listTab,
				"<tr>
					<td>
						<a href='facture-details/" .$value['id']."'>" .$value['id']."</a>
					</td>
					<td>".$value['name']."</td>
					<td>".$value['dateofissue']."</td>
				</tr>"
			);
		}
		return implode("", $listTab);
	}
}

 ?>