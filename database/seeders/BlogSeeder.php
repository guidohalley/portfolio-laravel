<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Blog::create([
            "title" => "Noticia ejemplo",
            "category" => "twodesigners",
            "subcategory" => "#",
            "logo_url" => "#",
            "color_hex" => "#fcf4ff",
            "body" => "LOREMLOREMLOREMLOREMLOREMLOREM",

        ]);
    
    }
}
