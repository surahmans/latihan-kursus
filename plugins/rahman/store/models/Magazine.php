<?php namespace Rahman\Store\Models;

use Model;

/**
 * Magazine Model
 */
class Magazine extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'rahman_store_magazines';

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
