<?php namespace Queni\DLearning;

use Backend;
use System\Classes\PluginBase;

/**
 * dLearning Plugin Information File
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
            'name'        => 'dLearning',
            'description' => 'Learning management system for OctoberCMS.',
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
        return [
            'Queni\DLearning\Components\Categories' => 'categories',
            'Queni\DLearning\Components\Courses' => 'courses',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'queni.dlearning.access_courses' => ['tab' => 'Дистанционное обучение', 'label' => 'Возможность редактирования курсов']
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'dlearning' => [
                'label'       => 'dLearning',
                'url'         => Backend::url('queni/dlearning/courses'),
                'icon'        => 'icon-graduation-cap',
                'permissions' => ['queni.dlearning.*'],
                'order'       => 500,
                'sideMenu' => [
                    'courses' => [
                        'label'       => 'Courses',
                        'icon'        => 'icon-book',
                        'url'         => \Backend::url('queni/dlearning/courses'),
                    ],
                    'lessons' => [
                        'label'       => 'Lessons',
                        'icon'        => 'icon-file-text-o',
                        'url'         => \Backend::url('queni/dlearning/lessons'),
                    ],
                    'categories' => [
                        'label'       => 'Categories',
                        'icon'        => 'icon-inbox',
                        'url'         => \Backend::url('queni/dlearning/categories'),
                    ],
                ],
            ],
        ];
    }

}
