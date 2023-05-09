<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clients;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clients::create([
            'logo_url'  => '',
            'name'  => 'Amid Misiones',            
       ]);

       Clients::create([
        'logo_url'  => '',
        'name'  => 'Petrovalle',            
        ]);

        Clients::create([
            'logo_url'  => '',
            'name'  => 'Wutzke Recruiter',            
       ]);

        Clients::create([
            'logo_url'  => '',
            'name'  => 'Wutzke Recruiter',            
        ]);
    }
}
