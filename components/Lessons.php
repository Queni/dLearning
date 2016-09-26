<?php namespace Queni\DLearning\Components;

use Cms\Classes\ComponentBase;
use Queni\DLearning\Models\Courses as CoursesModel;

class Lessons extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Lessons Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'currentCourse' => [
                'title'             => 'Current course',
                'description'       => 'Current course to display lessons',
                'default'           => '{{ :course }}'
            ]
        ];
    }

    public function list()
    {
        $currentCourse = $this->property('currentCourse');

        if ($currentCourse == null) return null;

        $course = CoursesModel::where('slug', $currentCourse)->first();

        if ($course == null) return null;

        return $course->lessons()->get(['title', 'slug']);
    }

}