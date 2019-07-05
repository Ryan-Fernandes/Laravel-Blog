<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title','category_id','author_id','description','image',
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category','category_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User','author_id');
    }

    public function scopeUserName()
    {
        return $this->belongsTo('App\User','author_id');
    }

}
