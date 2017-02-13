<?php
include_once 'inc/ResultSet.php';
class View {
	private $rs;
	
	public function View($rs){
		$this->rs = $rs;
	}
	
	public function display(){
		echo '<table>';
		echo '<tr><td align="center"><b>Code du client : </b></td><td> ' . $this->rs->getField(0, 0) . ' </td></tr>';
		echo '<tr><td align="center"><b>Societe du client : </b></td><td> ' . $this->rs->getField(0, 1) . ' </td></tr>';
		echo '<tr><td align="center"><b>Adresse du client : </b></td><td> ' . $this->rs->getField(0, 2) . ' </td></tr>';
		echo '<tr><td align="center"><b>Ville du client : </b></td><td> ' . $this->rs->getField(0, 3) . ' </td></tr>';
		echo '</table>';
	}
	
	public function displayA(){
		echo '<table>';
		echo '<tr><td align="center"><b>Code de larticle  : </b></td><td> ' . $this->rs->getField(0, 0) . ' </td></tr>';
		echo '<tr><td align="center"><b>Designation : </b></td><td> ' . $this->rs->getField(0, 1) . ' </td></tr>';
		echo '<tr><td align="center"><b>Stock disponnible : </b></td><td> ' . $this->rs->getField(0, 2) . ' </td></tr>';
		echo '<tr><td align="center"><b>Famille : </b></td><td> ' . $this->rs->getField(0, 3) . ' </td></tr>';
		echo '</table>';
	}
	
	public function displayF(){
		echo '<table>';
		echo '<tr><td align="center"><b>Code du fournisseur : </b></td><td> ' . $this->rs->getField(0, 0) . ' </td></tr>';
		echo '<tr><td align="center"><b>Societe du fournisseur : </b></td><td> ' . $this->rs->getField(0, 1) . ' </td></tr>';
		echo '<tr><td align="center"><b>Adresse du fournisseur : </b></td><td> ' . $this->rs->getField(0, 2) . ' </td></tr>';
		echo '<tr><td align="center"><b>Pays du fournisseur : </b></td><td> ' . $this->rs->getField(0, 3) . ' </td></tr>';
		echo '<tr><td align="center"><b>Ville du fournisseur : </b></td><td> ' . $this->rs->getField(0, 4) . ' </td></tr>';
		echo '</table>';
	}
	
	public function displayAffC(){
		echo '<table border="3" cellspacing="1" cellpadding="5" width = "100%">';
		echo	'<tr style="background: #0B3861;text-align: center;">';
		echo '<td><b><FONT size="5pt" color="white">Code</FONT></b></td><td><b><FONT size="5pt" color="white">Societe</FONT></b></td><td><b><FONT size="5pt" color="white">Adresse</FONT></b></td><td><b><FONT size="5pt" color="white">Ville</FONT></b></td>';
		echo '</tr>';
		for ($i = 0; $i < $this->rs->getRowCount(); $i++){
			echo '<tr style="background: #045FB4;text-align: center;">';
			for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
				echo '<td><b><FONT color="white">' . $this->rs->getField($i, $j) . '</FONT></b></td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	
	public function displayAffA(){
		echo '<table border="3" cellspacing="1" cellpadding="5" width = "100%">';
		echo	'<tr style="background: #0B3861;text-align: center;">';
		echo '<td><b><FONT size="5pt" color="white">Code</FONT></b></td><td><b><FONT size="5pt" color="white">Designation</FONT></b></td><td><b><FONT size="5pt" color="white">Stock</FONT></b></td><td><b><FONT size="5pt" color="white">Famille</FONT></b></td>';
		echo '</tr>';
		for ($i = 0; $i < $this->rs->getRowCount(); $i++){
			echo '<tr style="background: #045FB4;text-align: center;">';
			for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
				echo '<td><b><FONT color="white">' . $this->rs->getField($i, $j) . '</FONT></b></td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	
	public function displayAffF(){
		echo '<table border="3" cellspacing="1" cellpadding="5" width = "100%">';
		echo	'<tr style="background: #0B3861;text-align: center;">';
		echo '<td><b><FONT size="5pt" color="white">Code</FONT></b></td><td><b><FONT size="5pt" color="white">Societe</FONT></b></td><td><b><FONT size="5pt" color="white">Adresse</FONT></b></td><td><b><FONT size="5pt" color="white">Pays</FONT></b></td><td><b><FONT size="5pt" color="white">Ville</FONT></b></td>';
		echo '</tr>';
		for ($i = 0; $i < $this->rs->getRowCount(); $i++){
			echo '<tr style="background: #045FB4;text-align: center;">';
			for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
				echo '<td><b><FONT color="white">' . $this->rs->getField($i, $j) . '</FONT></b></td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	
	public function displayAffL(){
		echo '<table border="3" cellspacing="1" cellpadding="5" width = "100%">';
		echo	'<tr style="background: #0B3861;text-align: center;">';
		echo '<td><b><FONT size="5pt" color="white">Numero</FONT></b></td><td><b><FONT size="5pt" color="white">Date</FONT></b></td><td><b><FONT size="5pt" color="white">Code du client</FONT></b></td><td><b><FONT size="5pt" color="white">Designation</FONT></b></td><td><b><FONT size="5pt" color="white">Quantite</FONT></b></td>';
		echo '</tr>';
		for ($i = 0; $i < $this->rs->getRowCount(); $i++){
			echo '<tr style="background: #045FB4;text-align: center;">';
			for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
				echo '<td><b><FONT color="white">' . $this->rs->getField($i, $j) . '</FONT></b></td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	
	public function displayAffR(){
		echo '<table border="3" cellspacing="1" cellpadding="5" width = "100%">';
		echo	'<tr style="background: #0B3861;text-align: center;">';
		echo '<td><b><FONT size="5pt" color="white">Numero</FONT></b></td><td><b><FONT size="5pt" color="white">Date</FONT></b></td><td><b><FONT size="5pt" color="white">Code du client</FONT></b></td><td><b><FONT size="5pt" color="white">Designation</FONT></b></td><td><b><FONT size="5pt" color="white">Quantite</FONT></b></td>';
		echo '</tr>';
		for ($i = 0; $i < $this->rs->getRowCount(); $i++){
			echo '<tr style="background: #045FB4;text-align: center;">';
			for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
				echo '<td><b><FONT color="white">' . $this->rs->getField($i, $j) . '</FONT></b></td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	
	public function display1(){
					for ($i = 0; $i < $this->rs->getColumnCount(); $i++) {
						$this->rs->getFieldName($i);
					}

				for ($i = 0; $i < $this->rs->getRowCount(); $i++){
						for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
							$this->rs->getField($i, $j);
						}
				}
	}
	
	public function display2(){
		echo '<table border="1" cellspacing="0" cellpadding="5" width = "100%">';
		echo	'<tr style="background: buttonface;text-align: center;">';
					for ($i = 4; $i < $this->rs->getColumnCount(); $i++) {
						echo '<td>' . $this->rs->getFieldName($i) . '</td>';
					}

			echo '</tr>';
				for ($i = 4; $i < $this->rs->getRowCount(); $i++){
				echo '<tr>';
						for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
							echo '<td>' . $this->rs->getField($i, $j) . '</td>';
						}
				echo '</tr>'; 
				}
		echo '</table>';
	}
	
	public function displayJ(){
		echo '<table border="1" cellspacing="0" cellpadding="5" width = "100%">';
		echo	'<tr style="background: buttonface;text-align: center;">';
					for ($i = 1; $i < $this->rs->getColumnCount(); $i++) {
						echo '<td>' . $this->rs->getFieldName($i) . '</td>';
					}

			echo '</tr>';
				for ($i = 1; $i < $this->rs->getRowCount(); $i++){
				echo '<tr>';
						for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
							echo '<td>' . $this->rs->getField($i, $j) . '</td>';
						}
				echo '</tr>'; 
				}
		echo '</table>';
	}
	
	public function getStock(){
		return $this->rs->getField(1,0);
	}
	
	public function combo() {
		for($i = 0; $i < $this->$rs->getRowCount(); $i++) {
			for($j = 0; $j < $this->$rs->getColumnCount(); $i++) {
				echo '<option value="$result->getField($i,$j)">' . $this->$rs->getField($i,$j) . 'echo </option>"';
			}
		}
		echo '</select>';
	}
}