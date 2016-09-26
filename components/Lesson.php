<?php namespace Queni\DLearning\Components;

use Cms\Classes\ComponentBase;
use Queni\DLearning\Models\Courses as CoursesModel;

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
            'currentCourse' => [
                'title'             => 'Current course',
                'description'       => 'Current course to display lesson',
                'default'           => '{{ :course }}'
            ],
            'currentLesson' => [
                'title'             => 'Current lesson',
                'description'       => 'Current lesson to display',
                'default'           => '{{ :lesson }}'
            ]
        ];
    }

    public function info()
    {
        $currentCourse = $this->property('currentCourse');
        $currentLesson = $this->property('currentLesson');

        if ($currentCourse == null) return null;
        if ($currentLesson == null) return null;

        $course = CoursesModel::where('slug', $currentCourse)->first();

        if ($course == null) return null;

        return $course->lessons()->where('slug', $currentLesson)->first();
    }

}