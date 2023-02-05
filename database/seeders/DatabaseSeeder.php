<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* re fill new data categories */
        DB::table('categories')->delete();
        $categories = [
            ['name' => 'Smart Phones'],
            ['name' => 'Laptop'],
            ['name' => 'Accessories'],
        ];
        Category::insert($categories);


        /* re fill new data products */
        DB::table('products')->delete();
        $products = [
            [
                'name' => 'iPhone 13 pro',            
                'discription' => 'السعة: 1 تيرا بايت، مقاس الشاشة: 6.1 بوصة، نوع المنتج: هاتف ذكي، نظام التشغيل: iOS 15',
                'price' => 5550,
                'qty' => 5,
                'image' => 'iPhone13pro.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Samsung A73',            
                'discription' => 'السعة: 256 جيجابايت ، مقاس الشاشة: 6.7 بوصة، نوع المنتج: هاتف ذكي، نظام التشغيل: Android 12',
                'price' => 1990,
                'qty' => 3,
                'image' => 'samsung_a73.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Huawie Mate50 pro',            
                'discription' => 'السعة: 256 جيجابايت ، مقاس الشاشة: 6.7 بوصة، نوع المنتج: هاتف ذكي، نظام التشغيل: EMUI 13  ',
                'price' => 4200,
                'qty' => 7,
                'image' => 'huawie-mate-50-pro.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 14 plus',            
                'discription' => 'السعة: 128 جيجابايت ، مقاس الشاشة: 6.7 بوصة، نوع المنتج: هاتف ذكي، نظام التشغيل: iOS 15',
                'price' => 3700,
                'qty' => 5,
                'image' => 'iPhone14plus.jpg',
                'category_id' => 1,
            ]
        ];
        Product::insert($products);

        // \App\Models\Product::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
