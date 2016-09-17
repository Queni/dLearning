<?php namespace Queni\DLearning;

use Backend;
use System\Classes\PluginBase;

/**
 * dLearning Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Require plugin.
     */
    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'dLearning',
            'description' => 'Learning management system.',
            'author'      => 'Rulan Puryaev, Aleksei Fedorov',
            'icon'        => 'icon-graduation-cap',
            'homepage'    => 'https://github.com/queni/dlearning'
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
        return []; // Remove this line to activate

        return [
            'Queni\DLearning\Components\MyComponent' => 'myComponent',
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
            'queni.dlearning.some_permission' => [
                'tab' => 'dLearning',
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
            'dlearning' => [
                'label'       => 'dLearning',
                'url'         => Backend::url('queni/dlearning/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['queni.dlearning.*'],
                'order'       => 500,
            ],
        ];
    }

}
