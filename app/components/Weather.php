<?php


class Weather
{
    const API_URL = 'http://api.openweathermap.org/data/2.5/weather';

    const CASH_DIR = 'weather';
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        throw new Exception('Ключ апи не коректный');

    }

    public function getWeatherByCity($city, $cahe = false) {
        $param = [
            'q' => $city,
            'appid' => $this->apiKey,
        ];

        $url = self::API_URL . '?' . http_build_query($param);
        return $this->getResponce($url, $cahe);
    }

    public function getWeatherByCoordinate() {

    }

    private function getResponce($url, $cache = false) {
        if($cache) {
            return $url;
        }
        $result = File::getCache($url, self::CASH_DIR);
        return json_decode($result, true);
    }
}