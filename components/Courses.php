<?php namespace Queni\DLearning\Components;

use Cms\Classes\ComponentBase;
use Queni\DLearning\Models\Categories as CategoriesModel;
use Queni\DLearning\Models\Courses as CoursesModel;

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
            ],
            'currentCategory' => [
                'title'             => 'Current category',
                'description'       => 'Current category to display courses',
                'default'           => '{{ :category }}'
            ]
        ];
    }

    public function list()
    {
        $currentCategory = $this->property('currentCategory');
        $maxPosts = $this->property('maxPosts');

        if ($currentCategory)
        {
            $category = CategoriesModel::where('slug', $currentCategory)->first();

            if ($category == null) return null;
        
            return $category->courses()->paginate($maxPosts);
        }
        else
        {
            return CoursesModel::paginate($maxPosts);
        }
    }

}