<?php

require_once __DIR__.'/../components/File.php';
require_once __DIR__.'/../components/Weather.php';

$city = 'Saint Petersburg,ru';
$weather = new Weather('012e34537b328a78762f56bb13b7ac8c');
$url = $weather->getWeatherByCity($city, true);
// Получение погоды по Городу
$data = @file_get_contents($url);
File::cache($data, $url, Weather::CACHE_DIR);