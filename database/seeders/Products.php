<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Category;

class Products extends Seeder
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
            DB::table('products') -> insert([
                'name' => $faker->name,
                'short_description' => $faker->text,
                'type_sale'=>$faker->randomElement(['Sales']),
                'color_type_sale' => $faker -> randomElement(['#ff2832', '#365db5', '#00bf3f']),
                'slug' => $faker->slug,
                'description' => $faker->text,
                'regular_price' => $faker->randomFloat(2, 1, 100 ),
                'sale_price' => $faker->randomDigit,
                'SKU' => $faker->slug,
                'stock_status' => $faker->randomElement(['instock', 'outofstock']),
                // 'featured' => $faker->randomElement(['Yes', 'No']),
                'quantity' => $faker->randomDigit,
                'image' => $faker->image('public/assets/images/products', 400, 300, null, false),
                'images' => $faker->image('public/assets/images/products', 400, 300, null, false),
                'category_id' => $faker->randomElement(Category::all())['id'],
            ]);
        }
    }
}
