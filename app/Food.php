<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
   	public function categories()
	{
		return $this->hasMany(Food_link_category::class);
	}

	public function food()
	{
		return $this->hasMany(Menu::class);
	}

	public function orderItem()
	{
		return $this->hasMany(Order_item::class);
	}
}


