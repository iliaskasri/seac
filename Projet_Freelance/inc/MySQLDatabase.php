<?php
class MySQLDatabase {
	private $host;
	private $source;
	private $user;
	private $password;
	
	private $url;
	private $db;
	
	function MySQLDatabase($host, $source, $user, $password) {
		$this->host = $host;
		$this->source = $source;
		$this->user = $user;
		$this->password = $password;
		
		$this->url = "mysql:host=$host;dbname=$source";
		try {
			$this->db = new PDO($this->url, $user, $password);
		} catch (PDOException $e) {
			echo "<h2 style='color:red;'>Erreur : " . $e->getMessage() . "</h2>";
		}
		
	}
	public function delete($tableName, $key, $value){
		$q = "DELETE FROM "."$tableName"." WHERE "."$key"." = '$value'";
		$rs = $this->db->query($q);
		return $rs;
	}
	public function select($tableName) {
		$query = "SELECT * FROM $tableName";
		$rs = $this->db->query($query);
		return $rs;
	}
	
	public function selectByKey($tableName, $key, $value) {
		$query = "SELECT * FROM $tableName WHERE $key = '$value'";
		$rs = $this->db->query($query);
		return $rs;
	}
	
	public function selectLike($tableName, $key, $value) {
		$query = "SELECT * FROM $tableName WHERE $key LIKE '%$value%'";
		$rs = $this->db->query($query);
		return $rs;
	}
	
	public function selectLivraison($value, $value1) {
		$query = "SELECT article.stock_reel FROM livraion,client,article WHERE client.code LIKE '%$value%' and article.code LIKE '%$value1%'";
		$rs = $this->db->query($query);
		return $rs;
	}
	
	public function insert($row, $tableName) {
		$q = "INSERT INTO $tableName VALUES('" . $row[0] . "'";
		for ($i = 1; $i < count($row); $i++){
			$q = $q . ", '" . $row[$i] . "'";
		}
		$q = $q . ")";
		return $this->db->exec($q);
	}
	
	public function updateL($key, $value) {
		$q = "UPDATE article SET stock = stock-'$value' WHERE code = '$key' and stock>='$value'";
		$rs = $this->db->query($q);
		return $rs;
	}
	
	public function updateR($key, $value) {
		$q = "UPDATE article SET stock = stock+'$value' WHERE code = '$key'";
		$rs = $this->db->query($q);
		return $rs;
	}
	
	public function selectstock($key) {
		$q = "SELECT stock FROM article WHERE code = '$key'";
		$rs = $this->db->query($q);
		return $rs;
	}
	
	public function selectcode($tablename) {
		$q = "SELECT code FROM '$tablename'";
		$rs = $this->db->query($q);
		return $rs;
	}
}