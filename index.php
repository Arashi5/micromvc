<?php

require_once 'app/components/Autoloader.php';
require_once 'vendor/autoload.php';

use app\components\Session;
use app\controllers\MainController;
use app\components\Autoloader;

define('PROJECT_NAME', 'SkillUP');
define('ROOT_DIR', __DIR__);
define('SEPARATOR', '\\');

Autoloader::register();
Session::start();

$query = $_GET;
$method = null;
$action = null;
if (isset($query['act'])) {
    $action = $query['act'];
    $method = $action.'Action';
}

foreach (glob('app/controllers/[^ ]*Controller.php') as $controllerPath) {
    $controllerPath = SEPARATOR.str_replace(['.php', '/'], ['', SEPARATOR], $controllerPath);
    // Метод точно есть
    if ($method && method_exists($controllerPath, $method)) {
        $controller = new $controllerPath($action);
        $controller->{$method}();
        break;
    }
}

if (!isset($controller)) {
    (new MainController())->homeAction();
}
