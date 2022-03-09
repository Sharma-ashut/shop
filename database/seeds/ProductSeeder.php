<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        	['name'=>'Apple new mac book 201'.rand(1,9).' March :P', 'regular_price'=>rand(100,1000), 'sale_price'=>rand(100,1000), 'sku'=>'product_'.rand(100,1000), 'image_link'=>'http://localhost/pro-suits/public/img/product-'.rand(1,6).'.jpg'],
        ];

        foreach ($data as $key => $value) {
        	Products::create($value);
        }
    }
}
