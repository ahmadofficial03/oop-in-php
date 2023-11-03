<?php 

interface weatherApiClientInterface {
    public function getForecast(string $city);
}

class OpenWeatherMapClient implements weatherApiClientInterface {
    public function getForecast($city) {
        return 'It is raining in ' . $city;
    }
}

class DarkSkyApiClient implements weatherApiClientInterface {
    public function getForecast($city) {
        return "Raining in  " . $city;
    }
}

$weatherApiClient = new DarkSkyApiClient();
$forecast = $weatherApiClient->getForecast("Islamabad");
echo $forecast;
?>