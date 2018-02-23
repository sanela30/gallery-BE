<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function user() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
    
    public function images()
       {
            return $this->hasMany('App\Image');
       }

    public static function getSingleGallery($id){
    	   return self::with('user')->with(['images'], function ($q) {
    		return $q->whereNotNull('image_url')->orderBy('order', 'asc');
    	})->find($id);
    }  

    public function comments(){
		return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
	}
}
