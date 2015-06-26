<?php
class View {
	private $template;
	private $model;

	public function __construct($template, $model) {
		$this->template = $template;
		$this->model = $model;
	}

	public function render()
	{
    	$headers = [];
    	$model = $this->model;
    	ob_start();
		require $this->template; // <-- another discourse indentation bug
		$content = ob_get_clean();

		return ['headers' =>  $headers, 'body' => $content];
	}
}