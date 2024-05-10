<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Water',
                'description' => 'Drink - Pure and refreshing, our water is the perfect choice for staying hydrated throughout the day.',
                'price'=> 20,
                'image_url' => 'https://i.ibb.co/m6qfqnx/water.jpg',
            ],
            [
                'product_name' => 'Coffe',
                'description' => 'Hot Drink - Indulge in the rich aroma and bold flavor of our premium coffee, expertly brewed to perfection.',
                'price'=> 60,
                'image_url' => 'https://i.ibb.co/j8F5tNJ/coffe.jpg',
            ],
            [
                'product_name' => 'Orange Juise',
                'description' => 'Soft Drink - Start your day off right with a glass of freshly squeezed orange juice, bursting with vitamin C and natural sweetness.',
                'price'=> 60,
                'image_url' => 'https://i.ibb.co/VvdyNSB/orange-juise.jpg',
            ],
            [
                'product_name' => 'Cappuccino',
                'description' => 'Hot Drink - Enjoy the velvety smoothness of our cappuccino, topped with a delicate foam for a luxurious coffee experience',
                'price'=> 80,
                'image_url' => 'https://i.ibb.co/YW37G1v/Cappuccino.jpg',
            ],
            [
                'product_name' => 'Latte',
                'description' => 'Hot Drink - Savor the creamy texture and rich espresso flavor of our latte, a classic favorite for coffee enthusiasts',
                'price'=> 70,
                'image_url' => 'https://i.ibb.co/wrjCCnf/capticno.jpg',
            ],
            [
                'product_name' => 'Iced Coffee',
                'description' => 'Cool Drink - Cool down with our refreshing iced coffee, made with freshly brewed coffee and served over ice for a refreshing pick-me-up',
                'price'=> 70,
                'image_url' => 'https://i.ibb.co/pJgFFQ5/iced-coffe.jpg',
            ],
            [
                'product_name' => 'Mocha',
                'description' => 'Drink - Indulge in the irresistible combination of rich chocolate and espresso in our decadent mocha, a true delight for chocolate lovers',
                'price'=> 55,
                'image_url' => 'https://i.ibb.co/pyFMFML/Mocha.png',
            ],
            [
                'product_name' => 'Sandwiche',
                'description' => 'Beef or Chicken Sandwiche - Bite into our delicious sandwiches, made with fresh ingredients and served on artisan bread for a satisfying meal on the go',
                'price'=> 90,
                'image_url' => 'https://i.ibb.co/k9Jydzw/Sandwiche.jpg',
            ],
            [
                'product_name' => 'Salad',
                'description' => ' Delight in the crisp freshness of our salads, featuring a colorful array of seasonal vegetables and flavorful dressings.',
                'price'=> 95,
                'image_url' => 'https://i.ibb.co/cFq7W9f/Salad-2.jpg',
            ],
            [
                'product_name' => 'Croissant and Cookies',
                'description' => 'buttery, crescent-shaped French pastry. Good croissants are light, flaky, and delicately sweet. Enjoy one with a cup of coffee ',
                'price'=> 45,
                'image_url' => 'https://i.ibb.co/vvCNrt6/Croissant-and-Cookies.jpg',
            ],
            [
                'product_name' => 'Desserts',
                'description' => "Indulge in our tempting selection of desserts, from creamy cheesecakes to decadent chocolate treats, there's something to satisfy every sweet craving.",
                'price'=> 110,
                'image_url' => 'https://i.ibb.co/jGGcTr2/Desserts.jpg',
            ],
            [
                'product_name' => 'Donuts',
                'description' => "Treat yourself to our fluffy, glazed donuts, a classic favorite that's perfect for breakfast or dessert.",
                'price'=> 50,
                'image_url' => 'https://i.ibb.co/17cRKyK/Donuts.jpg',
            ],
            [
                'product_name' => 'Juices & Smoothies',
                'description' => 'Refresh yourself with our variety of fresh juices and smoothies, packed with vitamins and bursting with flavor.',
                'price'=> 65,
                'image_url' => 'https://i.ibb.co/hY82RjW/smothies.jpg',
            ],
            [
                'product_name' => 'Soup',
                'description' => 'Warm up with our hearty soups, made with wholesome ingredients and simmered to perfection for a comforting meal.',
                'price'=> 80,
                'image_url' => 'https://i.ibb.co/tc4GzXy/Soup.jpg',
            ],
            [
                'product_name' => 'Syrian Sandwiches',
                'description' => 'Experience the bold flavors of our authentic Syrian sandwiches, made with traditional ingredients and spices for a taste of the Middle East.',
                'price'=> 110,
                'image_url' => 'https://i.ibb.co/s95rMNf/Syrian-Sandwiches.jpg',
            ],
            [
                'product_name' => 'Burger',
                'description' => 'Sink your teeth into our juicy burgers, made with premium beef and served with your choice of toppings for a satisfying meal.',
                'price'=> 245,
                'image_url' => 'https://i.ibb.co/kDgPN7j/Burger.jpg',
            ],
            [
                'product_name' => 'Crepe',
                'description' => 'Indulge in the delicate sweetness of our thin, French-style crepes, filled with an array of delicious fillings for a delightful treat.',
                'price'=> 75,
                'image_url' => 'https://i.ibb.co/qDhFggw/Crepe.jpg',
            ],
            [
                'product_name' => 'Pasta',
                'description' => 'Twirl your fork into our flavorful pasta dishes, made with al dente pasta and tossed in savory sauces for a comforting meal.',
                'price'=> 105,
                'image_url' => 'https://i.ibb.co/4TXh80j/Pasta.jpg',
            ],
            [
                'product_name' => 'Fattah',
                'description' => 'Experience the rich flavors and aromatic spices of our traditional Fattah dish, a Middle Eastern specialty featuring layers of rice, meat, and crispy bread.',
                'price'=> 135,
                'image_url' => 'https://i.ibb.co/N6nqXbx/Fattah.jpg',
            ],
            [
                'product_name' => 'Grills & Meals',
                'description' => 'Enjoy our hearty grilled dishes and wholesome meals, made with quality ingredients and cooked to perfection for a satisfying dining experience.',
                'price'=> 450,
                'image_url' => 'https://i.ibb.co/YQKnYBg/Grills-Meals.jpg',
            ],
            [
                'product_name' => 'Pizza',
                'description' => 'Delight in our savory pizzas, topped with premium ingredients and baked to perfection in a wood-fired oven for an authentic taste of Italy.',
                'price'=> 320,
                'image_url' => 'https://i.ibb.co/DWhzQSg/Pizza.jpg',
            ],
            [
                'product_name' => 'Kufta',
                'description' => 'Indulge in the savory flavors of our tender kufta, seasoned to perfection and grilled to juicy perfection for a mouthwatering experience.',
                'price'=> 160,
                'image_url' => 'https://i.ibb.co/pbZSn0w/Beef-Kofta-12.jpg',
            ],
            [
                'product_name' => 'Shushi',
                'description' => 'Experience the artistry and freshness of our sushi, handcrafted with care and featuring a variety of classic and innovative rolls.',
                'price'=> 500,
                'image_url' => 'https://i.ibb.co/k6R6stt/suchi.png',
            ],

        ]);
    }
}
