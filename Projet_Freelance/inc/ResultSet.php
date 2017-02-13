<?php
class ResultSet {
	private $data;
	private $columnCount;
	private $rowCount;
	private $fields;
	
	public function ResultSet($st) {
		$this->columnCount = $st->columnCount();
		foreach ($st as $row) {
			$this->data[] = $row;
		}
		$this->rowCount = count($this->data);
		for ($i = 0; $i < $this->columnCount; $i++) {
			 $meta = $st->getColumnMeta($i);
			 $this->fields[] = $meta["name"];
		}
	}
	
	public function getColumnCount() {
		return $this->columnCount;
	}
	
	public function getRowCount() {
		return $this->rowCount;
	}
	
	public function getRow($index) {
		return  $this->data[$index];
	}
	
	public function getField($row, $col) {
		return  $this->data[$row][$col];
	}
	
	public function getFieldName($index) {
		return  $this->fields[$index];
	}
}