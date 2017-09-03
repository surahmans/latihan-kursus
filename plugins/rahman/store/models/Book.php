<?php namespace Rahman\Store\Models;

use Model;

/**
 * Book Model
 */
class Book extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'rahman_store_books';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'title', 'content'
    ];

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

    public function scopePopular($query)
    {
        return $query->orderBy('download', 'desc');
    }

    public function scopeIsPublished($query, $isPublished = true)
    {
        return $query->where('is_published', $isPublished);
    }
}
