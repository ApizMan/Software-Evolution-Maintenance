<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach(range(1,5) as $value){
            DB::table('categories') -> insert([
                'name' => $faker->name,
                'slug' => $faker->slug,
            ]);
        }
    }
}
