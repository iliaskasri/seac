<?php 
include 'inc/MySQLDatabase.php';
include 'inc/ResultSet.php';
$db = new MySQLDatabase("localhost", "GestionStock", "root", "");
					$r = $db->selectcode("client");
					$result = new ResultSet($r);
					for($i = 0; $i < $result->getRowCount(); $i++) {
						for($j = 0; $j < $result->getColumnCount(); $i++) {
							echo '<option value="$result->getField($i,$j)">' . $result->getField($i,$j) . 'echo </option>"';
						}	
					}
					echo '</select>';
?>