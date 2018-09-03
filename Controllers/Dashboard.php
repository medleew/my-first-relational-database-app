<?php 

class Dashboard extends Controller {
	public static function showRecentInvoices() {
		$listTab = [];
		foreach (self::fiveLastedInvoices() as $key => $value) {
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
					<td><a href='facture-details/".$value['id']."'><i class='far fa-eye'></i></a><a href='/Update-Invoice/".$value['id']."'><i class='fas fa-pen'></i></a><a href='modif'><i class='fas fa-trash'></i></a></td>
				</tr>"
			);
		}
		return implode("", $listTab);
	}
}


 ?>