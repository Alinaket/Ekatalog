<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table imgs');
        DB::table('imgs')-> insert([
            ['product_id'=>1, 'url'=>'https://mzimg.com/big/41/h4wkmtum941.jpg'],
            ['product_id'=>1, 'url'=>'https://mzimg.com/big/p1/h4wkmttalp1.jpg'],
//            ['product_id'=>1, 'url'=>'https://mzimg.com/big/x1/gyskrm40jx1.jpg'],
            ['product_id'=>1, 'url'=>'https://mzimg.com/big/c1/h4wkmu9egc1.jpg'],
            ['product_id'=>4, 'url'=>'https://mzimg.com/big/31/ey37xi1ir31.jpg'],
            ['product_id'=>4, 'url'=>'https://mzimg.com/big/61/ey381w3ma61.jpg'],
            ['product_id'=>4, 'url'=>'https://mzimg.com/big/t1/ey3824214t1.jpg'],
            ['product_id'=>2, 'url'=>'https://mzimg.com/big/51/gyj58zxl051.jpg'],
            ['product_id'=>2, 'url'=>'https://s.ek.ua/jpg_zoom1/2163151.jpg'],
            ['product_id'=>2, 'url'=>'https://mzimg.com/big/z1/gyj58zgf4z1.jpg'],
            ['product_id'=>3, 'url'=>''],
            ['product_id'=>3, 'url'=>''],
            ['product_id'=>3, 'url'=>''],

        ]);
    }
}
