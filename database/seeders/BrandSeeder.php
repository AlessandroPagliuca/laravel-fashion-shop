<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = config('dataseeder.brands');
        //dd($textures);
        foreach($brands as $brand){
               $new_brand = new Brand();
               $new_brand->name = $brand;
               $new_brand->slug = Str::slug($new_brand->name, '-');
               $new_brand->save();
           }
    }
}
