<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('restaurants')->delete();
        
        \DB::table('restaurants')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rosalind',
                'address' => '5715 Jett Mall Suite 882
East Clementina, NV 68697-6824',
                'created_at' => '2018-10-19 05:17:45',
                'updated_at' => '2018-10-19 05:17:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Kirstin',
                'address' => '216 Johnston Gardens
East Lueburgh, AK 27166',
                'created_at' => '2018-10-19 05:17:54',
                'updated_at' => '2018-10-19 05:17:54',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mikayla',
                'address' => '46113 Hessel Park Suite 527
Spinkaberg, NV 64138-1824',
                'created_at' => '2018-10-19 05:17:59',
                'updated_at' => '2018-10-19 05:17:59',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Moses',
                'address' => '989 Douglas Mission
Hayesport, AL 16140-7849',
                'created_at' => '2018-10-19 05:18:00',
                'updated_at' => '2018-10-19 05:18:00',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Tess',
                'address' => '77560 DuBuque Overpass Suite 248
Ledamouth, CT 90149-6658',
                'created_at' => '2018-10-19 05:18:01',
                'updated_at' => '2018-10-19 05:18:01',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Norval',
                'address' => '9777 Turcotte Ports
South Virginieside, WA 42050',
                'created_at' => '2018-10-19 05:18:40',
                'updated_at' => '2018-10-19 05:18:40',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Margot',
                'address' => '11586 Alberto Inlet
Georgiannafort, LA 93695-6137',
                'created_at' => '2018-10-19 05:18:42',
                'updated_at' => '2018-10-19 05:18:42',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Flossie',
                'address' => '385 Sauer Estate
West Flaviemouth, AR 39961',
                'created_at' => '2018-10-19 05:18:43',
                'updated_at' => '2018-10-19 05:18:43',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Roy',
                'address' => '1946 Boehm Circles
Lake Jaron, LA 51010-2029',
                'created_at' => '2018-10-19 05:18:44',
                'updated_at' => '2018-10-19 05:18:44',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Ahmad',
                'address' => '21135 Susie Road
Hodkiewiczshire, WV 83481',
                'created_at' => '2018-10-19 05:18:45',
                'updated_at' => '2018-10-19 05:18:45',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Barrett',
                'address' => '68303 Funk Key Apt. 624
New Darien, KY 94292-8242',
                'created_at' => '2018-10-19 05:29:37',
                'updated_at' => '2018-10-19 05:29:37',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'hello food',
                'address' => 'model town',
                'created_at' => '2018-10-19 07:49:32',
                'updated_at' => '2018-10-19 07:49:32',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'hello food',
                'address' => 'model town',
                'created_at' => '2018-10-19 07:50:06',
                'updated_at' => '2018-10-19 07:50:06',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'hello food',
                'address' => 'model town',
                'created_at' => '2018-10-19 07:55:21',
                'updated_at' => '2018-10-19 07:55:21',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'hello food',
                'address' => 'model town',
                'created_at' => '2018-10-19 07:59:08',
                'updated_at' => '2018-10-19 07:59:08',
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'demo',
                'address' => 'dugri',
                'created_at' => '2018-10-23 05:08:09',
                'updated_at' => '2018-10-23 05:08:09',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'basant',
                'address' => 'model town',
                'created_at' => '2018-10-19 08:07:09',
                'updated_at' => '2018-10-19 08:07:09',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'spice cube',
                'address' => 'near pau',
                'created_at' => '2018-10-20 06:03:58',
                'updated_at' => '2018-10-20 06:03:58',
            ),
            18 => 
            array (
                'id' => 21,
                'name' => 'demo',
                'address' => 'sd',
                'created_at' => '2018-10-23 05:09:32',
                'updated_at' => '2018-10-23 05:09:32',
            ),
            19 => 
            array (
                'id' => 22,
                'name' => 'Big\'N\'Meat',
                'address' => 'Pakhowal Road',
                'created_at' => '2018-10-23 05:12:08',
                'updated_at' => '2018-10-23 05:12:08',
            ),
            20 => 
            array (
                'id' => 23,
                'name' => 'DT restaurant',
                'address' => 'model gram',
                'created_at' => '2018-10-23 05:18:14',
                'updated_at' => '2018-10-23 05:18:14',
            ),
            21 => 
            array (
                'id' => 24,
                'name' => 'DT restaurant',
                'address' => 'model gram',
                'created_at' => '2018-10-23 05:19:21',
                'updated_at' => '2018-10-23 05:19:21',
            ),
            22 => 
            array (
                'id' => 25,
                'name' => 'DT restaurant',
                'address' => 'model gram',
                'created_at' => '2018-10-23 05:19:35',
                'updated_at' => '2018-10-23 05:19:35',
            ),
            23 => 
            array (
                'id' => 26,
                'name' => 'Basant restaurant',
                'address' => 'model town',
                'created_at' => '2018-10-23 05:24:08',
                'updated_at' => '2018-10-23 05:24:08',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'sv restaurant',
                'address' => 'mall road',
                'created_at' => '2018-10-23 05:43:06',
                'updated_at' => '2018-10-23 05:43:06',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'kk fast food',
                'address' => 'field ganj',
                'created_at' => '2018-10-23 06:00:38',
                'updated_at' => '2018-10-23 06:00:38',
            ),
        ));
        
        
    }
}