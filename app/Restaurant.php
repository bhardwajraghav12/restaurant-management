<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    
	public function categories()
	{
		return $this->hasMany(Restaurant_link_category::class);
	}
}
