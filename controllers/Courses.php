<?php namespace Queni\DLearning\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Queni\DLearning\Controllers\Lessons;

/**
 * Courses Back-end Controller
 */
class Courses extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $lessons;

    public function __construct()
    {
        parent::__construct();

        $this->lessons = new Lessons();

        BackendMenu::setContext('Queni.DLearning', 'dlearning', 'courses');
    }
}