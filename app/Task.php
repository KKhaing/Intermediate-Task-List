<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Model as Moloquent;

class Task extends Moloquent 
{
	protected $collection = 'tasks';

	protected $fillable = ['user_id','id','name'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

}
