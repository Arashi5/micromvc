<?php

namespace app\config;

class DB
{
    public static $connections = [
        'default' => [
            'driver' => 'mysql',
            'db' => 'omasn',
            'host' => 'localhost',
            'username' => 'omasn',
            'password' => 'admin1q2',
            'charset' => 'utf8',
            'errors' => true,
        ],
    ];
}