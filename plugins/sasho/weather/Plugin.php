<?php namespace Sasho\Weather;

use Backend;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Sasho\Weather\Rules\CityValidate;
use System\Classes\PluginBase;

/**
 * Weather Plugin Information File
 */
class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Weather',
            'description' => 'Weather forecast...',
            'author'      => 'Sasho',
            'icon'        => 'icon-leaf'
        ];
    }


    public function register()
    {

    }



    public function boot()
    {
        Validator::extend('city_validate', CityValidate::class);

    }
    public function registerComponents()
    {
        return [
            'Sasho\Weather\Components\Weather' => 'myWeather',
        ];
    }

    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'sasho.weather.some_permission' => [
                'tab' => 'Weather',
                'label' => 'Some permission'
            ],
        ];
    }


    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'weather' => [
                'label'       => 'Weather',
                'url'         => Backend::url('sasho/weather/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['sasho.weather.*'],
                'order'       => 500,
            ],
        ];
    }
}
