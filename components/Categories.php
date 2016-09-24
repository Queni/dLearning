<?php namespace Queni\DLearning\Components;

use Cms\Classes\ComponentBase;
use Queni\DLearning\Models\Categories as CategoriesModel;

class Categories extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Categories Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function list()
    {
        return CategoriesModel::get();
    }

}