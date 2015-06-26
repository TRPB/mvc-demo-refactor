<?php
require_once 'model.php';

class CreateController {
	private $model;

	public function __construct(Model $model) {
		$this->model = $model;
	}

	public function doAction($post)
	{
		if ($this->model->validateThing($post)) {
			$this->model->insertThing($post);
			$this->model->success();	
		}
	}
}