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
    public $hasMany = [
        'course' => ['Queni\DLearning\Models\Courses', 'foreignKey' => 'id'],
        'user' => ['RainLab\User\Models\User', 'foreignKey' => 'id']
    ];
    public $belongsTo = [];
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