<?php 

class Dashboard extends Controller {
	public static function greetingUser() {
		return "Bienvenue à vous, ".$_SESSION['login']." !";
	}
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
					<td>".$value['contactname']."</td>
					<td>".$value['companyname']."</td>
					<td>
						<a href='facture-details/".$value['id']."' alt='details'>
							<i class='fa fa-eye'></i>
						</a>
						<a href='/Update-Invoice/".$value['id']."' alt='modifications'>
							<i class='fa fa-pencil'></i>
						</a>
						<a href='/deleteinvoice/".$value['id']."' alt='suppression'>
							<i class='fa fa-minus-circle'></i>
						</a>
					</td>

				</tr>"
			);
		}
		return implode("", $listTab);
	}
	public static function showRecentPersons() {
		$listTab = [];
		foreach (self::fiveLastedPersons() as $key => $value) {
			array_push($listTab,
				"<tr>
					<td>
						<a href='persons-details/" .$value['id']."'>" .$value['id']."</a>
					</td>
					<td>".$value['name']."</td>
					<td>".$value['firstname']."</td>
					<td>".$value['email']."</td>
					<td>".$value['companyname']."</td>
					<td>
						<a href='persons-details/".$value['id']."'>
							<i class='fa fa-eye'></i>
						</a>
						<a href='/persons-update/".$value['id']."'>
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