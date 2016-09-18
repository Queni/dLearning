<?php namespace Queni\DLearning\Models;

use Model;

/**
 * Categories Model
 */
class Categories extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'queni_dlearning_categories';

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
    public $hasOne = [
        'parent_category' => ['Queni\DLearning\Models\Categories', 'key' => 'parent_category_id']
    ];
    public $hasMany = [
        'courses' => ['Queni\DLearning\Models\Courses', 'key' => 'category_id']
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