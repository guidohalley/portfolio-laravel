<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'title' => 'Programador Web FullStack JAVA',
            'description' => 'Curso de Programacion Web JAVA',
            'dates' => '2020',
            'color_hex' => '#fcf44ff',
        ]);

            Education::create([
                'title' => 'Estudiante INCADE',
                'description' => 'Analista de Sistemas y Programacion en Instituto INCADE',
                'dates' => '2021 - 2023',
                'color_hex' => '#fcf44ff',
            ]);

            Education::create([
                'title' => 'Linux  de 0 a Experto',
                'description' => 'Nate Gentile Academy',
                'dates' => '2022',
                'color_hex' => '#fcf44ff',
            ]);


        
    }
}
