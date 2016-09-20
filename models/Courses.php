<?php namespace Queni\DLearning\Models;

use Model;

/**
 * Courses Model
 */
class Courses extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'queni_dlearning_courses';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'lessons' => ['Queni\DLearning\Models\Lessons', 'key' => 'course_id', 'otherKey' => 'id'],
        // 'authors' => ['Queni\DLearning\Models\Authors', 'key' => 'course_id', 'otherKey' => 'id'],
        // 'users_courses' => ['Queni\DLearning\Models\AvailablesCourses', 'key' => 'course_id', 'otherKey' => 'id']
    ];
    public $belongsTo = [
        'category' => ['Queni\DLearning\Models\Categories']
    ];
    public $belongsToMany = [
        'users' => ['Queni\DLearning\Models\Users', 'table' => 'queni_dlearning_availables_courses', 'key' => 'course_id', 'otherKey' => 'user_id'],
        'authors' => ['Queni\DLearning\Models\Authors', 'table' => 'queni_dlearning_authors', 'key' => 'course_id', 'otherKey' => 'user_id'],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getCategoryOptions()
    {
        $categories = Categories::orderBy('name')->get(['id', 'name']);
        $options = [];

        foreach($categories as $value)
        {
            $options[$value['id']] = $value['name'];
        }

        return $options;
    }

}