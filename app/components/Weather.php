<?php


class Weather
{
    const API_URL = 'http://api.openweathermap.org/data/2.5/weather';

    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;

    }

    public function getWeatherByCity($city) {
        $param = [
            'q' => $city,
            'appid' => $this->apiKey,
        ];

        $url = self::API_URL . '?' . http_build_query($param);
        return $this->getResponce($url);
    }

    public function getWeatherByCoordinate() {

    }

    private function getResponce($url) {
        $result = file_get_contents($url);
        return json_decode($result, true);
    }
}