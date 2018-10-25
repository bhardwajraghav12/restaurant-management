<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    public function orders()
    {
    	return $this->belongsTo(Order::class);
    }

    public function foods()
    {
    	return $this->belongsTo(Food::class);
    }
}
