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
}
