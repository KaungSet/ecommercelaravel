<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
            'price'=>'500',
            'description'=>'A smartphone with 4gb ram and more features',
            'category'=>'mobile',
            'gallery'=>'https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg'
            ],
            [
                'name'=>'TCL TV',
            'price'=>'1200',
            'description'=>'A smartTV with more features',
            'category'=>'TV',
            'gallery'=>'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZnJlZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80'
            ],
            [
                'name'=>'Cool Fridge',
            'price'=>'400',
            'description'=>'very cold fridge made in china',
            'category'=>'fridge',
            'gallery'=>'https://media.istockphoto.com/photos/singapore-skyline-cityscape-at-night-picture-id491056644?k=6&m=491056644&s=612x612&w=0&h=HMJv_ochUp2pMLMhHoDIdEm5GQuGu3rbMOWOEjziE84='
            ]

        ]);
    }
}
