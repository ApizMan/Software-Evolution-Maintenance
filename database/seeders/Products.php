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
                'type_sale'=>$faker->randomElement(['Sales', 'New', 'Best Seller']),
                'color_type_sale' => $faker -> randomElement(['#ff2832', '#365db5', '#00bf3f']),
                'slug' => $faker->slug,
                'description' => $faker->text,
                'regular_price' => $faker->randomFloat(2, 1, 100 ),
                'sale_price' => $faker->randomDigit,
                'SKU' => $faker->slug,
                'stock_status' => $faker->randomElement(['In Stock', 'Out of Stock']),
                // 'featured' => $faker->randomElement(['Yes', 'No']),
                'quantity' => $faker->randomDigit,
                'image' => $faker->randomElement(['digital_1.jpg', 'digital_01.jpg', 'digital_2.jpg', 'digital_02.jpg', 'digital_3.jpg', 'digital_03.jpg', 'digital_4.jpg', 'digital_04.jpg', 'digital_5.jpg', 'digital_05.jpg', 'digital_6.jpg', 'digital_06.jpg', 'digital_7.jpg', 'digital_07.jpg', 'digital_8.jpg', 'digital_08.jpg', 'digital_9.jpg', 'digital_09.jpg', 'digital_10.jpg']),
                'images' => $faker->randomElement(['digital_1.jpg', 'digital_01.jpg', 'digital_2.jpg', 'digital_02.jpg', 'digital_3.jpg', 'digital_03.jpg', 'digital_4.jpg', 'digital_04.jpg', 'digital_5.jpg', 'digital_05.jpg', 'digital_6.jpg', 'digital_06.jpg', 'digital_7.jpg', 'digital_07.jpg', 'digital_8.jpg', 'digital_08.jpg', 'digital_9.jpg', 'digital_09.jpg', 'digital_10.jpg']),
                'category_id' => $faker->randomElement(Category::all())['id'],
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}

