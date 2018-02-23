<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
     	'content', 'gallery_id', 'user_id',
    ];

    public static function getSingleGalleryComments($id){
		return self::where('gallery_id',$id)->with('user')->get();
	}

	public function gallery(){
		return $this->belongsTo(Gallery::class);
	}

	public function user(){
		return $this->belongsTo(User::class);
	}
}
