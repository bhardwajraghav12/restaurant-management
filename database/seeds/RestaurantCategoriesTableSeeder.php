<?php

use Illuminate\Database\Seeder;

class RestaurantCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('restaurant_categories')->delete();
        
        \DB::table('restaurant_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'street food',
                'created_at' => '2018-10-18 12:29:47',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'cafee',
                'created_at' => '2018-10-18 12:30:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'north indian',
                'created_at' => '2018-10-18 12:30:16',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'fastfood',
                'created_at' => '2018-10-18 12:30:31',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'chinese',
                'created_at' => '2018-10-18 12:30:44',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'burger',
                'created_at' => '2018-10-18 12:30:57',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'snacks',
                'created_at' => '2018-10-18 12:31:10',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'drinks',
                'created_at' => '2018-10-18 12:31:21',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'quick bites ',
                'created_at' => '2018-10-18 12:31:53',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'mughali',
                'created_at' => '2018-10-18 12:32:21',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'casual dining',
                'created_at' => '2018-10-18 12:32:33',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}