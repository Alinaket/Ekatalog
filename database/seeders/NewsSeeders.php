<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table news');
        DB::table('news')->insert([
            ['category'=>0, 'name'=>"сонеце світит", 'paper'=>"когдато был интернет а теперь его нет"],
            ['category'=>0, 'name'=>"ран кин", 'paper'=>"шерсть натурального дермантина"],
        ]);
        //
    }
}
