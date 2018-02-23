<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps=false;
    
    protected $fillable = [
        'image_url',
    ];
    public function gallery()
       {
           return $this->belongsTo('App\Gallery','gallery_id','id');
       }
}
