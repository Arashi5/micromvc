<?php

namespace app\components;

class Navbar
{
    public static $menu = [
        'home' => [
            'title' => 'Главная',
        ],
        'posts' => [
            'title' => 'Лента',
        ],
        'reg' => [
            'title' => 'Регистрация',
        ],
        'weather' => [
            'title' => 'Погода',
        ],
    ];

    public static $active = 'home';
}