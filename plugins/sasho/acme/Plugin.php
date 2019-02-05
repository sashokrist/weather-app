<?php namespace Sasho\Acme;

use Backend;
use System\Classes\PluginBase;

/**
 * Acme Plugin Information File
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
            'name'        => 'Acme',
            'description' => 'Test Ajax...',
            'author'      => 'Sasho',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */

    public function registerComponents()
    {

        return [
            'Sasho\Acme\Components\Test' => 'myPlugin',
        ];
    }


}
