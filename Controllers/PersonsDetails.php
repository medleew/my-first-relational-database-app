<?php 

class PersonsDetails extends Controller {
	public static function isSetReturnValue ($returnQuery) {
		if (isset($_GET['id'])) {
			return self::queryPerson($_GET['id'])[$returnQuery];
		}
	}
	public static function query($type) {
		if (isset($_GET['id'])) {
			switch ($type) {
				case 'id':
					return self::isSetReturnValue('id');
					break;
				case 'name':
					return self::isSetReturnValue('name');
					break;
				case 'firstname':
					return self::isSetReturnValue('firstname');
					break;
				case 'phonenumber':
					return self::isSetReturnValue('phonenumber');
					break;
				case 'email':
					return self::isSetReturnValue('email');
					break;
				case 'companyname':
					return self::isSetReturnValue('companyname');
					break;
				case 'companyid':
					return self::isSetReturnValue('companyid');
					break;
				default:
					return "Not found";
					break;
			}
		} else {
			return "Null";
		}
	}
	public static function showAllLinkedInvoices() {
		$listTab = [];
		foreach (self::queryInvoicesPersonne($_GET['id']) as $key => $value) {
			array_push($listTab, 
				"<tr>
					<td>
						<a href='/facture-details/" .$value['id']."'>" .$value['id']."</a>
					</td>
					<td>".$value['dateofissue']."</td>
					<td>".$value['object']."</td>
				</tr>"
			);
		}
		return implode("", $listTab);
	}
}

 ?>