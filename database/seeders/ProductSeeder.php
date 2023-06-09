<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::create('products', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name',100)->unique();
        //     $table->string('slug');
        //     $table->string('cover_image')->nullable();
        //     $table->text('description')->nullable();
        //     $table->double('price', 6, 2)->nullable();

        //     $table->timestamps();
        // });

        $products = config('dataseeder.products');
        //dd($textures);
        foreach($products as $product){
               $new_product = new Product();
               $new_product->name = $product['name'];
               $new_product->slug = Str::slug($new_product->name, '-');
               $new_product->image_link = $product['image_link'];
               $new_product->description = $product['description'];
               $new_product->price = $product['price'];
               $new_product->save();
        }
    }
}
