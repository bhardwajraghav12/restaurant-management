<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('foods')->delete();
        
        \DB::table('foods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'burger',
                'created_at' => '2018-10-23 06:52:51',
                'updated_at' => '2018-10-23 06:52:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'burger',
                'created_at' => '2018-10-23 06:53:47',
                'updated_at' => '2018-10-23 06:53:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'burger',
                'created_at' => '2018-10-23 06:53:57',
                'updated_at' => '2018-10-23 06:53:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'burger',
                'created_at' => '2018-10-23 06:54:50',
                'updated_at' => '2018-10-23 06:54:50',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'burger',
                'created_at' => '2018-10-23 07:15:16',
                'updated_at' => '2018-10-23 07:15:16',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'burger',
                'created_at' => '2018-10-23 07:17:25',
                'updated_at' => '2018-10-23 07:17:25',
            ),
            6 => 
            array (
                'id' => 17,
                'name' => 'noodel',
                'created_at' => '2018-10-23 07:49:24',
                'updated_at' => '2018-10-23 07:49:24',
            ),
            7 => 
            array (
                'id' => 16,
                'name' => 'noodles',
                'created_at' => '2018-10-23 07:48:57',
                'updated_at' => '2018-10-23 07:48:57',
            ),
            8 => 
            array (
                'id' => 15,
                'name' => 'pepsi',
                'created_at' => '2018-10-23 07:40:16',
                'updated_at' => '2018-10-23 07:40:16',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'pepsi',
                'created_at' => '2018-10-23 07:37:03',
                'updated_at' => '2018-10-23 07:37:03',
            ),
            10 => 
            array (
                'id' => 18,
                'name' => 'noodles',
                'created_at' => '2018-10-23 07:49:57',
                'updated_at' => '2018-10-23 07:49:57',
            ),
            11 => 
            array (
                'id' => 19,
                'name' => 'noodles',
                'created_at' => '2018-10-23 07:56:28',
                'updated_at' => '2018-10-23 07:56:28',
            ),
            12 => 
            array (
                'id' => 20,
                'name' => 'dosa',
                'created_at' => '2018-10-23 07:56:47',
                'updated_at' => '2018-10-23 07:56:47',
            ),
            13 => 
            array (
                'id' => 21,
                'name' => 'pizza',
                'created_at' => '2018-10-23 08:03:23',
                'updated_at' => '2018-10-23 08:03:23',
            ),
        ));
        
        
    }
}