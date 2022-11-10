<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table products');
        DB::table('products')->insert([
            [ 'name'=>"HP Smart Tank Plus 570", 'price'=>24324, 'category'=>1, 'img'=>"https://s.ek.ua/jpg/2256942.jpg", 'description'=>""],
            [ 'name'=>"Prolimatech PK-2 Nano Aluminium 1.5g", 'price'=>319, 'category'=>2, 'img'=>"https://s.ek.ua/jpg/2253142.jpg", 'description'=>""],
            [ 'name'=>"Cooler Master MasterGel PRO", 'price'=>239, 'category'=>3, 'img'=>"https://s.ek.ua/jpg/2253116.jpg", 'description'=>""],
            [ 'name'=>"Goodyear EfficientGrip Performance", 'price'=>1634, 'category'=>4, 'img'=>"https://s.ek.ua/jpg/264348.jpg", 'description'=>""],
            [ 'name'=>"Cybex Balios S Lux", 'price'=>13999, 'category'=>5, 'img'=>"https://s.ek.ua/jpg/1998900.jpg", 'description'=>""],
            [ 'name'=>"Canon 17-55mm f/2.8 EF-S IS USM", 'price'=>24500, 'category'=>6, 'img'=>"https://s.ek.ua/jpg/52879.jpg", 'description'=>""],
            [ 'name'=>"Casio G-Shock DW-5600E-1V", 'price'=>2840, 'category'=>7, 'img'=>"https://s.ek.ua/jpg/362312.jpg", 'description'=>""],
            [ 'name'=>"Casio G-Shock G-2900F-1", 'price'=>1890, 'category'=>8, 'img'=>"https://s.ek.ua/jpg/363917.jpg", 'description'=>""],
            [ 'name'=>"Canon EOS RP body", 'price'=>40632, 'category'=>9, 'img'=>"https://s.ek.ua/jpg/1523604.jpg", 'description'=>""],
            [ 'name'=>"Whirlpool TDLR 65230", 'price'=>11900, 'category'=>10, 'img'=>"https://s.ek.ua/jpg/860263.jpg", 'description'=>""],
            [ 'name'=>"Sony A7 IV kit", 'price'=>106999, 'category'=>11, 'img'=>"https://s.ek.ua/jpg/2139507.jpg", 'description'=>""],
            [ 'name'=>"Esperanza EKH005", 'price'=>1150, 'category'=>12, 'img'=>"https://s.ek.ua/jpg/1076608.jpg", 'description'=>""],
            [ 'name'=>"Xiaomi Mi TV P1 43", 'price'=>13899, 'category'=>13, 'img'=>"https://s.ek.ua/jpg/2077517.jpg", 'description'=>""],
            [ 'name'=>"Xiaomi Mi Robot Vacuum-Mop 2 Pro", 'price'=>12999, 'category'=>14, 'img'=>"https://s.ek.ua/jpg/1677862.jpg", 'description'=>""],
            [ 'name'=>"Roborock S7", 'price'=>1870, 'category'=>15, 'img'=>"https://s.ek.ua/jpg/1833685.jpg", 'description'=>""],
            ]);
    }
}
