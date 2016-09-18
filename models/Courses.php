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
        'lessons' => ['Queni\DLearning\Models\Lessons', 'key' => 'course_id'],
        'authors' => ['Queni\DLearning\Models\Authors', 'key' => 'course_id']
    ];
    public $belongsTo = [
        'category' => ['Queni\DLearning\Models\Categories']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}