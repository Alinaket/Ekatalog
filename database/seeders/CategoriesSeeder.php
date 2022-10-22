<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement( 'truncate table categories');
        DB::table('categories')->insert([
            ['name'=>"итеджер на нейм не подходит", 'icon'=>"img/img.png" ,'parent_id'=>0],
            ['name'=>"гуашь", 'icon'=>"img/img_1.png" ,'parent_id'=>23],
            ['name'=>"флуоресцентная", 'icon'=>"img/img_2.png" ,'parent_id'=>21],
        ]);

    }
}
