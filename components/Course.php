<?php namespace Queni\DLearning\Components;

use Cms\Classes\ComponentBase;
use Queni\DLearning\Models\Courses as CoursesModel;

class Course extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Course Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'currentCourse' => [
                'title'             => 'Current category',
                'description'       => 'Current category to display',
                'default'           => '{{ :course }}'
            ]
        ];
    }

    public function info()
    {
        $currentCourse = $this->property('currentCourse');

        if ($currentCourse == null) return null;

        return CoursesModel::where('slug', $currentCourse)->get();
    }

}