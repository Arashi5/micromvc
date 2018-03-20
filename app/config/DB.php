<?php

namespace app\config;
class DB
{
    public static $connections = [
        'default' => [
            'driver' => 'mysql',
            'db' => 'php2',
            'host' => 'localhost',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'errors' => true,
        ],
    ];
}