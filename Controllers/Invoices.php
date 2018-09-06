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
					<td>".$value['contactname']."</td>
					<td>
						<a href='company-details/" .$value['companyid']."'>
							".$value['companyname']."
						</a>
					</td>
					<td>
						<a href='facture-details/".$value['id']."' alt='details'>
							<i class='fa fa-eye'></i>
						</a>
						<a href='/Update-Invoice/".$value['id']."' alt='modifications'>
							<i class='fa fa-pencil'></i>
						</a>
					</td>
				</tr>"
			);
		}
		return implode("", $listTab);
	}
}

 ?>