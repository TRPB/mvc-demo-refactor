<?php
require_once 'controllers.php';
require_once 'view.php';

// Route
if ($_SERVER['REQUEST_URI'] === '/new' && $_SERVER['REQUEST_METHOD'] === 'GET') {
	$model = new Model();
	$view = new View('newThing.html.php', $model);	

} else if ($_SERVER['REQUEST_URI'] === '/new' && $_SERVER['REQUEST_METHOD'] === 'POST') {
	$model = new Model();
	$controller = new CreateController($model);
    $controller->doAction($_POST);
    $view = new View('newThing.html.php', $model);
} else {
    // 404; not implemented
    exit;
}


$response = $view->render();

// Send response
// Assumes response in the form of ['headers' => [...], 'body' => ...].
foreach ($response['headers'] as $header) {
    header($header);
}
echo $response['body'];