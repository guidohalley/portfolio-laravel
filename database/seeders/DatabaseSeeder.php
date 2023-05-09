<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Guido Halley',
            'email' => 'guidohalle@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'description' => "FullStack Web Developer",
            'github_url' => "https://github.com/guidohalley/guidohalley",
            'linkeid_url' => "https://www.linkedin.com/in/guidohalley",
            'instagram_url' => "https://www.instagram.com/guidohalley/",
            'phone' => "3764-609701",
            'address' => "Argentina, Posadas Misiones. ",
            'birthday' => "1998-05-27",
            'bio' => "Estudiante de Analista de Sistemas en 3 Año Trabajando como Desarrollador Web en el Poder Judicial de Misiones CO-FUNDADOR DE twodesigners.online",
            
        ]);

        $this->call([

            BlogSeeder::class,
            ClientSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            JobSeeder::class,
            KnowledgeSeeder::class,
            ServiceSeeder::class,
        ]);
    
    }
}