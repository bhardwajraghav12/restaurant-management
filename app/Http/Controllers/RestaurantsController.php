<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant_category;
use App\Restaurant;
use App\Restaurant_link_category;
use App\Food;
use App\Food_link_category;
use App\Food_category;
use App\Menu;

class RestaurantsController extends Controller
{
	/**
	 * List of all restaurants
	 */
  public function index()
  {
		$restaurants = Restaurant::with('categories','categories.details')->get();
  	
  	return view('restaurant.index',compact('restaurants'));
  }

  public function add()
  {
  	//fetch categories
  	$categories = Restaurant_category::all();

  	return view('restaurant.add',compact('categories'));
  }

  public function store()
  {
  	//validation
		request()->validate([
			'name' => 'required',
			'address' => 'required',
			'categories' => 'required'
		]);

  	//store request in model
  	$restaurant = new Restaurant;
  	$restaurant->name = request('name');
  	$restaurant->address = request('address');
  	$restaurant->save();

    $categories = request('categories');

    foreach($categories as $category){
    	$restaurant->categories()->create([
    		'restaurant_category_id' => $category
  	 	]);
    }

  	session()->flash('message', 'stored successfully');
    session()->flash('alert-class', 'alert-success'); 

	 	//redirect back with status message
  	return redirect('restaurants');
  }

  public function foodAdd()
  {
    //fetch categories
    $categories = Restaurant_category::all();
    //dd(request()->all());

    return view('food.add',compact('categories'));
  }

  public function foodStore()
  {
    //validation
    request()->validate([
      'name' => 'required',
      'categories' => 'required'
    ]);

    $food = new Food();
    $food->name = request('name');
    $food->save();
      
    $categories = request('categories');
    foreach($categories as $category){
      $food->categories()->create([
        'food_category_id' => $category
      ]);
    }
    //dd(request()->all());
    session()->flash('message', 'stored successfully');
    session()->flash('alert-class', 'alert-success'); 

    return redirect()->back();
  }

  public function menuAdd()
  {
    $foods = Food::all();

    $restaurants = Restaurant::select('id','name')->get();

    return view('menu.add',compact('foods','restaurants'));
  }

  public function menuPost()
  {

    request()->validate([
      'price' => 'required', 
      'discount' => 'required|max:100'
    ]); 
    //dd(request()->all());
    $menu = new Menu;
    $menu->restaurant_id = request('restaurant');
    $menu->food_id = request('food');
    $menu->price = request('price');
    $menu->discount = request('discount');

    $menu->save(); 

    session()->flash('message', 'stored successfully');
    session()->flash('alert-class', 'alert-success'); 

    return redirect()->back();
  }
}
