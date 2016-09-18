<?php namespace Queni\DLearning\Models;

use Model;

/**
 * Lessons Model
 */
class Lessons extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'queni_dlearning_lessons';

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
    public $hasMany = [];
    public $belongsTo = [
        'course' => ['Queni\DLearning\Models\Courses', 'key' => 'category_id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

}