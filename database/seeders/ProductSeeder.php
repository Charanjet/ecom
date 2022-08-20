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
        $faker = \Faker\Factory::create();
        DB::table('products')->insert([
            'name' => $faker->text(12),
            'description' => $faker->text(),
            'category' => $faker->text(10),
            'images' => $faker->imageUrl($width = 640, $height = 480),
            'price' => $faker->randomNumber(2)
        ]);
    }
}
