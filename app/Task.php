<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task extends Eloquent 
{
	protected $collection = 'tasks';

	protected $fillable = ['name'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

}
