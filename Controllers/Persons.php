<?php 

class Persons extends Controller {
	public static function showAllPersons () {
		$listTab = [];
		foreach (self::AllPersons() as $key => $value) {
			array_push($listTab,
				"<tr>
					<td>
						<a href='persons-details/" .$value['id']."'>" .$value['id']."</a>
					</td>
					<td>".$value['name']."</td>
					<td>".$value['firstname']."</td>
					<td>".$value['email']."</td>
					<td>".$value['companyname']."</td>
				</tr>"
			);
		}
		return implode("", $listTab);
	}

}

 ?>