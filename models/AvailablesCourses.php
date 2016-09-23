<?php namespace Queni\DLearning\Models;

use Model;

/**
 * AvailablesCourses Model
 */
class AvailablesCourses extends Model
{
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'queni_dlearning_availables_courses';

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
        'user' => ['Queni\DLearning\Models\Users'],
        'course' => ['Queni\DLearning\Models\Courses']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public static function boot()
    {
        static::creating(function ($model) {
            $model->setCreatedAt($model->freshTimestamp());
        });
        
        parent::boot();
    }

}