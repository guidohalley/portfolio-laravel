<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      

        Job::create([
            'category'=> 'Web Applications',
            'title'=> 'Webservices Developerl',
            'subcategory'=>'Poder Judicial',
            'logo_url'=>'',
            'color_hex'=>'#fcf4ff',
            'project_name'=>'Clinica Odontolica CRUD',
            'languages'=>'JAVA SE',
            'client'=>'Polo Tic',
            'preview'=>'#',
            'body'=>'LOREMLOREMLOREMLOREMLOREM'
        ]);

    }
}
