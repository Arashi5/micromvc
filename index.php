<?php


require_once 'app/controllers/Controller.php';

define('PROJECT_NAME', 'SkillUP');

$query = $_GET;
$method = null;
if (isset($query['act'])) {
    $method = $query['act'] . 'Action';
}

$controller = new Controller();
if($method && method_exists($controller, $method)) {
    // Метод есть точно
    $controller->{$method}();
} else {
    $controller->homeAction();
}



