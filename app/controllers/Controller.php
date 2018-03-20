<?php

namespace app\controllers;

use app\components\Navbar;

abstract class Controller
{
    protected $action;

    public function __construct($action = null)
    {
        $this->action = Navbar::$active = $action;
    }

    protected function render(string $view, string $title, array $param = []) {
        extract($param);
        require_once 'templates/layout.php';
    }

    public function route($route) {
        return '/micromvc/?act='.$route;
    }
}