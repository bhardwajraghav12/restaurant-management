<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant_link_category extends Model
{
	protected $fillable = ['restaurant_category_id'];
    public function restaurant()
    {
    	return $this->belongsTo(Restaurant::class);
    }

    public function details()
    {
    	return $this->belongsTo(Restaurant_category::class, 'restaurant_category_id', 'id');
    }
}
