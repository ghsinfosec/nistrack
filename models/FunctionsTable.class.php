<?php

// initialize FunctionsTable class
class FunctionsTable {
	private $db;

	// create the constructor
	public function __construct($db) {
		$this->db = $db;
	}
	
	// create makeStatement method to reuse on other methods
	private function makeStatement($sql, $data = NULL) {
		$statement = $this->db->prepare($sql);

		// try to execute the sql query,
		// if it fails show an error message
		try {
			$statement->execute($data);
		} catch (Exception $e) {
			$msg = "<p>Tried to run: $sql</p>
				<p>Exception: $e</p>";
			trigger_error($msg);
		}

		return $statement;
	}

	// method to get all of the NIST functions from the database
	public function getNistFunctions() {
		$sql = "SELECT function_name, function_description FROM functions";
		$statement = $this->makeStatement($sql);

		return $statement;
	}
}
