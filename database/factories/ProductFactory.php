<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            [
                'name' => 'iPhone 13 pro',            
                'discription' => 'السعة: 1 تيرا بايت، مقاس الشاشة: 6.1 بوصة، نوع المنتج: هاتف ذكي، نظام التشغيل: iOS 15',
                'price' => 5550,
                'qyt' => 5,
                'images' => 'iPhone13pro.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Samsung A73',            
                'discription' => 'السعة: 256 جيجابايت ، مقاس الشاشة: 6.7 بوصة، نوع المنتج: هاتف ذكي، نظام التشغيل: Android 12',
                'price' => 1990,
                'qyt' => 3,
                'images' => 'samsung_a73.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Huawie Mate50 pro',            
                'discription' => 'السعة: 256 جيجابايت ، مقاس الشاشة: 6.7 بوصة، نوع المنتج: هاتف ذكي، نظام التشغيل: EMUI 13  ',
                'price' => 4200,
                'qyt' => 7,
                'images' => 'huawie-mate-50-pro.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'iPhone 14 plus',            
                'discription' => 'السعة: 128 جيجابايت ، مقاس الشاشة: 6.7 بوصة، نوع المنتج: هاتف ذكي، نظام التشغيل: iOS 15',
                'price' => 3700,
                'qyt' => 5,
                'images' => 'iPhone14plus.jpg',
                'category_id' => 1,
            ]
        ];
    }
}
