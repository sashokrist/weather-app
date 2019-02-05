<?php namespace Sasho\Weather;

use Backend;
use System\Classes\PluginBase;

/**
 * Weather Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Weather',
            'description' => 'Weather forecast...',
            'author'      => 'Sasho',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {


        return [
            'Sasho\Weather\Components\Weather' => 'myWeather',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
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

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
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
