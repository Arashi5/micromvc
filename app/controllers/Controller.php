<?php

require_once 'app/models/User.php';
require_once 'app/components/Weather.php';
require_once 'MainController.php';

abstract class Controller
{

    public function render($view, $title, $param=[]) {
        extract($param);
        require_once 'templates/layout.php';

    }

    public function route($route) {
        return '/micromvc/?act=' .$route;
    }
}