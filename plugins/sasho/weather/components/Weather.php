<?php namespace Sasho\Weather\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Weather extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Weather API',
            'description' => 'Weather API...'
        ];
    }

    public function defineProperties()
    {
        return [
            'max' => [
                'description' => 'The most amount of todo items allowed',
                'title' => 'Max items',
                'default' => 10,
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items value is required and should be integer.'
            ]
        ];
    }

    function onWeather()
    {
        $request  = post('city');

        $apiURL = 'http://api.openweathermap.org/data/2.5/weather';
        $apiKey = '&APPID=b411acedff0fca6e3d2414e032140192';
        $tempUnit = '&units=metric';
        $city = 'Sofia';
        $dataURL = $apiURL . $apiKey . $city . $tempUnit;
        $client = new Client();
        try {

            $response = $client->get($apiURL, [
                'query' => [
                    'q' => $request,
                    'APPID' => 'b411acedff0fca6e3d2414e032140192',
                    'units' => 'metric'
                ]
            ]);


            $this->page['city'] = json_decode($response->getBody()->getContents());

        } catch (\Throwable $exception) {
            dd($exception);
        }

    }
}