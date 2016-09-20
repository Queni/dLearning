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

        $this->belongsToMany['user_courses'] = ['Queni\DLearning\Models\Courses', 'table' => 'queni_dlearning_availables_courses', 'key' => 'user_id', 'otherKey' => 'course_id'];
        $this->belongsToMany['author_courses'] = ['Queni\DLearning\Models\Courses', 'table' => 'queni_dlearning_availables_courses', 'key' => 'user_id', 'otherKey' => 'course_id'];
    }

}