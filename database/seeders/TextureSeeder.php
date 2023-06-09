<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Texture;
use Illuminate\Support\Str;

class TextureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $textures = config('dataseeder.textures');
        //dd($textures);
        foreach($textures as $texture){
               $new_texture = new Texture();
               $new_texture->name = $texture;
               $new_texture->slug = Str::slug($new_texture->name, '-');
               $new_texture->save();
           }
    }
}
