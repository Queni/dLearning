<?php namespace Queni\DLearning\Models;

use Model;

/**
 * Authors Model
 */
class Authors extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'queni_dlearning_authors';

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

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function getCourseIdOptions()
    {
        $categories = Courses::orderBy('name')->get(['id', 'name']);
        $options = [];

        foreach($categories as $value)
        {
            $options[$value['id']] = $value['name'];
        }

        return $options;
    }

    public function getUserIdOptions()
    {
        $categories = \RainLab\User\Models\User::orderBy('name')->get(['id', 'name']);
        $options = [];

        foreach($categories as $value)
        {
            $options[$value['id']] = $value['name'];
        }

        return $options;
    }

}