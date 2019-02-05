<?php
namespace Sasho\Acme\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Test extends ComponentBase{
    public function componentDetails()
    {
        return [
            'name'        => 'Test API',
            'description' => 'Test API...'
        ];
    }

    public function defineProperties()
    {
        return [
            'max' => [
                'description'       => 'The most amount of todo items allowed',
                'title'             => 'Max items',
                'default'           => 10,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items value is required and should be integer.'
            ]
        ];
    }
    function onTest(){
        $dataURL = 'https://learnwebcode.github.io/json-example/animals-1.json';
        $client = new Client();

        try {
            $response = $client->get($dataURL);
            //($response->getBody()->getContents());
            $this->page['rates'] = json_decode($response->getBody()->getContents());
        } catch (\Throwable $exception) {

        }

    }
}