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
            'name'        => 'queni.dlearning::lang.plugin.name',
            'description' => 'queni.dlearning::lang.plugin.description',
            'author'      => 'queni.dlearning::lang.plugin.authors',
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
            'Queni\DLearning\Components\Lessons' => 'lessons',
            'Queni\DLearning\Components\Lesson' => 'lesson',
            'Queni\DLearning\Components\Course' => 'course',
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
                'label'       => 'queni.dlearning::lang.dlearning.name_plugin',
                'url'         => Backend::url('queni/dlearning/courses'),
                'icon'        => 'icon-graduation-cap',
                'permissions' => ['queni.dlearning.*'],
                'order'       => 500,
                'sideMenu' => [
                    'courses' => [
                        'label'       => 'queni.dlearning::lang.dlearning.courses',
                        'icon'        => 'icon-book',
                        'url'         => \Backend::url('queni/dlearning/courses'),
                    ],
                    'lessons' => [
                        'label'       => 'queni.dlearning::lang.dlearning.lessons',
                        'icon'        => 'icon-file-text-o',
                        'url'         => \Backend::url('queni/dlearning/lessons'),
                    ],
                    'categories' => [
                        'label'       => 'queni.dlearning::lang.dlearning.categories',
                        'icon'        => 'icon-inbox',
                        'url'         => \Backend::url('queni/dlearning/categories'),
                    ],
                ],
            ],
        ];
    }

}
