<?php namespace Queni\DLearning\Components;

use Cms\Classes\ComponentBase;
use Queni\DLearning\Models\Courses as CoursesModel;
use Queni\DLearning\Models\Categories as CategoriesModel;

class Courses extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Courses Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'maxPosts' => [
                'title'             => 'The number of posts',
                'description'       => 'The number of posts to display',
                'default'           => 10,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Posts property can contain only numeric symbols'
            ]
        ];
    }

    public function list()
    {
        return CoursesModel::paginate($this->param('maxPosts'));
    }

}