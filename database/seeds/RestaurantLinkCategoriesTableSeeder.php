<?php

use Illuminate\Database\Seeder;

class RestaurantLinkCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('restaurant_link_categories')->delete();
        
        \DB::table('restaurant_link_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'restaurant_category_id' => 8,
                'restaurant_id' => 7,
                'created_at' => '2018-10-19 05:21:48',
                'updated_at' => '2018-10-19 05:21:48',
            ),
            1 => 
            array (
                'id' => 2,
                'restaurant_category_id' => 2,
                'restaurant_id' => 6,
                'created_at' => '2018-10-19 05:21:56',
                'updated_at' => '2018-10-19 05:21:56',
            ),
            2 => 
            array (
                'id' => 3,
                'restaurant_category_id' => 1,
                'restaurant_id' => 6,
                'created_at' => '2018-10-19 05:21:58',
                'updated_at' => '2018-10-19 05:21:58',
            ),
            3 => 
            array (
                'id' => 4,
                'restaurant_category_id' => 6,
                'restaurant_id' => 2,
                'created_at' => '2018-10-19 05:21:59',
                'updated_at' => '2018-10-19 05:21:59',
            ),
            4 => 
            array (
                'id' => 5,
                'restaurant_category_id' => 2,
                'restaurant_id' => 2,
                'created_at' => '2018-10-19 05:22:00',
                'updated_at' => '2018-10-19 05:22:00',
            ),
            5 => 
            array (
                'id' => 6,
                'restaurant_category_id' => 10,
                'restaurant_id' => 7,
                'created_at' => '2018-10-19 05:22:02',
                'updated_at' => '2018-10-19 05:22:02',
            ),
            6 => 
            array (
                'id' => 7,
                'restaurant_category_id' => 1,
                'restaurant_id' => 1,
                'created_at' => '2018-10-19 05:22:03',
                'updated_at' => '2018-10-19 05:22:03',
            ),
            7 => 
            array (
                'id' => 8,
                'restaurant_category_id' => 11,
                'restaurant_id' => 7,
                'created_at' => '2018-10-19 05:22:04',
                'updated_at' => '2018-10-19 05:22:04',
            ),
            8 => 
            array (
                'id' => 9,
                'restaurant_category_id' => 3,
                'restaurant_id' => 7,
                'created_at' => '2018-10-19 05:22:05',
                'updated_at' => '2018-10-19 05:22:05',
            ),
            9 => 
            array (
                'id' => 10,
                'restaurant_category_id' => 4,
                'restaurant_id' => 4,
                'created_at' => '2018-10-19 05:22:06',
                'updated_at' => '2018-10-19 05:22:06',
            ),
            10 => 
            array (
                'id' => 11,
                'restaurant_category_id' => 3,
                'restaurant_id' => 8,
                'created_at' => '2018-10-19 05:29:20',
                'updated_at' => '2018-10-19 05:29:20',
            ),
            11 => 
            array (
                'id' => 12,
                'restaurant_category_id' => 5,
                'restaurant_id' => 1,
                'created_at' => '2018-10-19 05:40:58',
                'updated_at' => '2018-10-19 05:40:58',
            ),
            12 => 
            array (
                'id' => 13,
                'restaurant_category_id' => 11,
                'restaurant_id' => 9,
                'created_at' => '2018-10-19 05:41:02',
                'updated_at' => '2018-10-19 05:41:02',
            ),
            13 => 
            array (
                'id' => 14,
                'restaurant_category_id' => 6,
                'restaurant_id' => 5,
                'created_at' => '2018-10-19 05:41:04',
                'updated_at' => '2018-10-19 05:41:04',
            ),
            14 => 
            array (
                'id' => 15,
                'restaurant_category_id' => 1,
                'restaurant_id' => 10,
                'created_at' => '2018-10-19 05:41:06',
                'updated_at' => '2018-10-19 05:41:06',
            ),
            15 => 
            array (
                'id' => 16,
                'restaurant_category_id' => 4,
                'restaurant_id' => 8,
                'created_at' => '2018-10-19 05:41:08',
                'updated_at' => '2018-10-19 05:41:08',
            ),
            16 => 
            array (
                'id' => 17,
                'restaurant_category_id' => 2,
                'restaurant_id' => 8,
                'created_at' => '2018-10-19 05:41:10',
                'updated_at' => '2018-10-19 05:41:10',
            ),
            17 => 
            array (
                'id' => 18,
                'restaurant_category_id' => 3,
                'restaurant_id' => 1,
                'created_at' => '2018-10-19 05:41:11',
                'updated_at' => '2018-10-19 05:41:11',
            ),
            18 => 
            array (
                'id' => 19,
                'restaurant_category_id' => 4,
                'restaurant_id' => 11,
                'created_at' => '2018-10-19 05:42:25',
                'updated_at' => '2018-10-19 05:42:25',
            ),
            19 => 
            array (
                'id' => 20,
                'restaurant_category_id' => 9,
                'restaurant_id' => 11,
                'created_at' => '2018-10-19 05:42:29',
                'updated_at' => '2018-10-19 05:42:29',
            ),
            20 => 
            array (
                'id' => 21,
                'restaurant_category_id' => 4,
                'restaurant_id' => 11,
                'created_at' => '2018-10-19 05:42:32',
                'updated_at' => '2018-10-19 05:42:32',
            ),
            21 => 
            array (
                'id' => 22,
                'restaurant_category_id' => 8,
                'restaurant_id' => 1,
                'created_at' => '2018-10-19 05:42:34',
                'updated_at' => '2018-10-19 05:42:34',
            ),
            22 => 
            array (
                'id' => 23,
                'restaurant_category_id' => 7,
                'restaurant_id' => 3,
                'created_at' => '2018-10-19 05:42:36',
                'updated_at' => '2018-10-19 05:42:36',
            ),
            23 => 
            array (
                'id' => 24,
                'restaurant_category_id' => 4,
                'restaurant_id' => 16,
                'created_at' => '2018-10-19 08:01:10',
                'updated_at' => '2018-10-19 08:01:10',
            ),
            24 => 
            array (
                'id' => 25,
                'restaurant_category_id' => 6,
                'restaurant_id' => 17,
                'created_at' => '2018-10-19 08:07:09',
                'updated_at' => '2018-10-19 08:07:09',
            ),
            25 => 
            array (
                'id' => 26,
                'restaurant_category_id' => 4,
                'restaurant_id' => 18,
                'created_at' => '2018-10-19 08:07:24',
                'updated_at' => '2018-10-19 08:07:24',
            ),
            26 => 
            array (
                'id' => 27,
                'restaurant_category_id' => 3,
                'restaurant_id' => 19,
                'created_at' => '2018-10-20 06:03:58',
                'updated_at' => '2018-10-20 06:03:58',
            ),
            27 => 
            array (
                'id' => 28,
                'restaurant_category_id' => 4,
                'restaurant_id' => 20,
                'created_at' => '2018-10-23 05:08:09',
                'updated_at' => '2018-10-23 05:08:09',
            ),
            28 => 
            array (
                'id' => 29,
                'restaurant_category_id' => 3,
                'restaurant_id' => 21,
                'created_at' => '2018-10-23 05:09:32',
                'updated_at' => '2018-10-23 05:09:32',
            ),
            29 => 
            array (
                'id' => 30,
                'restaurant_category_id' => 1,
                'restaurant_id' => 22,
                'created_at' => '2018-10-23 05:12:08',
                'updated_at' => '2018-10-23 05:12:08',
            ),
            30 => 
            array (
                'id' => 31,
                'restaurant_category_id' => 3,
                'restaurant_id' => 22,
                'created_at' => '2018-10-23 05:12:08',
                'updated_at' => '2018-10-23 05:12:08',
            ),
            31 => 
            array (
                'id' => 32,
                'restaurant_category_id' => 4,
                'restaurant_id' => 22,
                'created_at' => '2018-10-23 05:12:08',
                'updated_at' => '2018-10-23 05:12:08',
            ),
            32 => 
            array (
                'id' => 33,
                'restaurant_category_id' => 5,
                'restaurant_id' => 22,
                'created_at' => '2018-10-23 05:12:08',
                'updated_at' => '2018-10-23 05:12:08',
            ),
            33 => 
            array (
                'id' => 34,
                'restaurant_category_id' => 6,
                'restaurant_id' => 22,
                'created_at' => '2018-10-23 05:12:08',
                'updated_at' => '2018-10-23 05:12:08',
            ),
            34 => 
            array (
                'id' => 35,
                'restaurant_category_id' => 7,
                'restaurant_id' => 22,
                'created_at' => '2018-10-23 05:12:08',
                'updated_at' => '2018-10-23 05:12:08',
            ),
            35 => 
            array (
                'id' => 36,
                'restaurant_category_id' => 4,
                'restaurant_id' => 23,
                'created_at' => '2018-10-23 05:18:14',
                'updated_at' => '2018-10-23 05:18:14',
            ),
            36 => 
            array (
                'id' => 37,
                'restaurant_category_id' => 5,
                'restaurant_id' => 23,
                'created_at' => '2018-10-23 05:18:14',
                'updated_at' => '2018-10-23 05:18:14',
            ),
            37 => 
            array (
                'id' => 38,
                'restaurant_category_id' => 6,
                'restaurant_id' => 23,
                'created_at' => '2018-10-23 05:18:14',
                'updated_at' => '2018-10-23 05:18:14',
            ),
            38 => 
            array (
                'id' => 39,
                'restaurant_category_id' => 4,
                'restaurant_id' => 24,
                'created_at' => '2018-10-23 05:19:21',
                'updated_at' => '2018-10-23 05:19:21',
            ),
            39 => 
            array (
                'id' => 40,
                'restaurant_category_id' => 5,
                'restaurant_id' => 24,
                'created_at' => '2018-10-23 05:19:21',
                'updated_at' => '2018-10-23 05:19:21',
            ),
            40 => 
            array (
                'id' => 41,
                'restaurant_category_id' => 6,
                'restaurant_id' => 24,
                'created_at' => '2018-10-23 05:19:21',
                'updated_at' => '2018-10-23 05:19:21',
            ),
            41 => 
            array (
                'id' => 42,
                'restaurant_category_id' => 4,
                'restaurant_id' => 25,
                'created_at' => '2018-10-23 05:19:35',
                'updated_at' => '2018-10-23 05:19:35',
            ),
            42 => 
            array (
                'id' => 43,
                'restaurant_category_id' => 5,
                'restaurant_id' => 25,
                'created_at' => '2018-10-23 05:19:35',
                'updated_at' => '2018-10-23 05:19:35',
            ),
            43 => 
            array (
                'id' => 44,
                'restaurant_category_id' => 6,
                'restaurant_id' => 25,
                'created_at' => '2018-10-23 05:19:35',
                'updated_at' => '2018-10-23 05:19:35',
            ),
            44 => 
            array (
                'id' => 45,
                'restaurant_category_id' => 3,
                'restaurant_id' => 26,
                'created_at' => '2018-10-23 05:24:08',
                'updated_at' => '2018-10-23 05:24:08',
            ),
            45 => 
            array (
                'id' => 46,
                'restaurant_category_id' => 4,
                'restaurant_id' => 26,
                'created_at' => '2018-10-23 05:24:08',
                'updated_at' => '2018-10-23 05:24:08',
            ),
            46 => 
            array (
                'id' => 47,
                'restaurant_category_id' => 6,
                'restaurant_id' => 26,
                'created_at' => '2018-10-23 05:24:08',
                'updated_at' => '2018-10-23 05:24:08',
            ),
            47 => 
            array (
                'id' => 48,
                'restaurant_category_id' => 7,
                'restaurant_id' => 26,
                'created_at' => '2018-10-23 05:24:08',
                'updated_at' => '2018-10-23 05:24:08',
            ),
            48 => 
            array (
                'id' => 49,
                'restaurant_category_id' => 2,
                'restaurant_id' => 27,
                'created_at' => '2018-10-23 05:43:06',
                'updated_at' => '2018-10-23 05:43:06',
            ),
            49 => 
            array (
                'id' => 50,
                'restaurant_category_id' => 5,
                'restaurant_id' => 27,
                'created_at' => '2018-10-23 05:43:06',
                'updated_at' => '2018-10-23 05:43:06',
            ),
            50 => 
            array (
                'id' => 51,
                'restaurant_category_id' => 7,
                'restaurant_id' => 27,
                'created_at' => '2018-10-23 05:43:06',
                'updated_at' => '2018-10-23 05:43:06',
            ),
            51 => 
            array (
                'id' => 52,
                'restaurant_category_id' => 4,
                'restaurant_id' => 28,
                'created_at' => '2018-10-23 06:00:38',
                'updated_at' => '2018-10-23 06:00:38',
            ),
        ));
        
        
    }
}