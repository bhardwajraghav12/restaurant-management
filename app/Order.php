<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function orderItem()
    {
    	return $this->hasMany(Order_item::class);
    }

}
