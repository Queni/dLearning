<?php namespace Queni\DLearning\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Lessons Back-end Controller
 */
class Lessons extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Queni.DLearning', 'dlearning', 'lessons');
    }
}