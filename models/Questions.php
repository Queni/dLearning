<?php namespace Queni\DLearning\Models;

use Model;

/**
 * Questions Model
 */
class Questions extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'queni_dlearning_questions';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}