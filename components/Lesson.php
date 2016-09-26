<?php namespace Queni\DLearning\Components;

use Cms\Classes\ComponentBase;

class Lesson extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Lesson Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'currentLesson' => [
                'title'             => 'Current category',
                'description'       => 'Current category to display',
                'default'           => '{{ :lesson }}'
            ]
        ];
    }

}