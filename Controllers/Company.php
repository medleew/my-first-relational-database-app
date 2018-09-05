<!-- CONTTROLLERS PART2 -->     
<!-- SOCIETE.php -->
<?php 
    class Company extends Controller {
        public static function showAllCompagnies() {
            $listTab = [];
            foreach (self::AllCompanies() as $key => $value) {
                array_push($listTab,
                    "<tr>
                        <td>
                            <a href='Company-details/" .$value['id']."'>" .$value['id']."</a>
                        </td>
                        <td>".$value['name']."</td>
                        <td>".$value['country']."</td>
                        <td>".$value['email']."</td>
                        <td>".$value['address']."</td>
                        <td>".$value['tva']."</td>
                        <td>".$value['companytype']."</td>
                    </tr>"
                );
            }
            return implode("", $listTab);
        }
    }
?>