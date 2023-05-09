<?php

namespace Database\Seeders;

use App\Models\Knowledge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Knowledge::create([
            'title' => 'Linux',
           
        ]);

        Knowledge::create([
            'title' => 'mysql',
            
        ]);

        Knowledge::create([
            'title' => 'PostgreSQL',
           
        ]);

        Knowledge::create([
            'title' => 'PHP',
         
        ]);

        Knowledge::create([
            'title' => 'Laravel',
         
        ]);


    }
}
