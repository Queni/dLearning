<?php namespace Queni\DLearning\Models;

use RainLab\User\Models\User;

/**
 * Users Model
 */
class Users extends User
{

    public function __construct()
    {
        parent::__construct();

        $this->belongsToMany['course'] = ['Queni\DLearning\Models\Courses', 'table' => 'queni_dlearning_availables_courses', 'key' => 'course_id', 'otherKey' => 'course_id'];
    }

}