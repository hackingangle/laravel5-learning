<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * Fillable fields for an Article.
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id', // temporary
    ];

    /**
     * Additional fields to treat as Carbon instances.
     * @var array
     */
    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date) 
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function scopePublished($query) 
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query) 
    {
        $query->where('published_at', '>', Carbon::now());
    }

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
