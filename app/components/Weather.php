<?php

namespace app\components;

class Weather
{
    const API_URL = 'http://api.openweathermap.org/data/2.5/';

    const CACHE_DIR = 'weather';

    private $apiKey;

    public function __construct($apiKey = null)
    {
        if (!$apiKey) {
            throw new \Exception('Ключ API не передан');
        }
        $this->apiKey = $apiKey;
    }

    public function getWeatherByCity($city, $cache = false) {
        $param = [
            'q' => $city,
            'appid' => $this->apiKey,
        ];

        $url = self::API_URL . 'weather?' . http_build_query($param);
        return $this->getResponse($url, $cache);
    }

    public function getWeatherByCoordinate($lat, $lon) {
        $param = [
            'lat' => $lat,
            'lon' => $lon,
            'cnt' => 10,
            'appid' => $this->apiKey,
        ];

        $url = self::API_URL . 'find?' . http_build_query($param);
        return $this->getResponse($url);
    }

    private function getResponse($url, $cache = false) {
        if ($cache) {
            return $url;
        }
        $result = File::getCache($url, self::CACHE_DIR);
        return json_decode($result, true);
    }
}