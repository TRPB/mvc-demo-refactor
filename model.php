<?php
class Model {
	public $violations = [];
	public $entity;
	public $success = false;

	public function validateThing($entity)
	{ 
		// Pretend both are required
		if (!isset($entity['field1']) || $entity['field1'] === '') {
		    $this->violations[] = 'Field 1 is required.';
		}
		if (!isset($entity['field2']) || $entity['field2'] === '') {
		    $this->violations[] = 'Field 2 is required.';
		}

		// Pretend field 2 requires at least 3 chars
		if (strlen($entity['field2']) < 3) {
		    $this->violations[] = 'Field 2 must have at least 3 characters.';
		}

		return empty($this->violations);
	}

	public function insertThing($entity)
	{
	    // Pretend insert SQL
	    $this->entity = $entity;
	}

	public function success() {
		$this->success = true;
	}

}