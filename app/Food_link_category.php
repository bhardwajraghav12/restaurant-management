<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food_link_category extends Model
{

	protected $fillable = ['food_category_id'];
 	public function food()
    {
    	return $this->belongsTo(Food::class);
    }

    public function details()
    {
    	return $this->belongsTo(Restaurant_category::class, 'food_category_id', 'id');
    }
}
