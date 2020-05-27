<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable = [
        'used_id',
		'name',
		'path',
		'description',
    ];

	public function pages() {
		return $this ->belongsToMany('App/Page')
	}

	public function user()
   {
	   return $this->belongsTo('App\User');
   }
}
