<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'Starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => 'img/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => 'img/342-3422633_pork-entrees-steak-pork-png.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Sides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => 'img/Download-Salad-Transparent-PNG.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Deserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil?',
            'image_url' => 'img/Download-Cupcake-PNG-Transparent-Image-420x190.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
