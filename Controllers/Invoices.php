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
					<td>".$value['dateofissue']."</td>
					<td>".$value['object']."</td>
					<td>".$value['companyname']."</td>
					<td>".$value['contactname']."</td>
					<td>".$value['companytype']."</td>
				</tr>"
			);
		}
		return implode("", $listTab);
	}
}

 ?>