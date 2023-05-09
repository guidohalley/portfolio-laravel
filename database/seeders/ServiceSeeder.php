<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title'=> 'Co-Fundador de twodesigners.online',
            'description'=>' el trabajo de un desarrollador de sistemas web abarca el ciclo completo de desarrollo de una aplicación web, desde la planificación hasta el mantenimiento y la mejora continua.',
            'logo_url'=>'',
            'color_hex'=>'#fcf4ff',
        ]);

        Service::create([
            'title'=> 'Desarrollo de Sistemas Web en LARAVEL',
            'description'=>' el trabajo de un desarrollador de sistemas web abarca el ciclo completo de desarrollo de una aplicación web, desde la planificación hasta el mantenimiento y la mejora continua.',
            'logo_url'=>'',
            'color_hex'=>'#fcf4ff',
        ]);
        
        Service::create([
            'title'=> 'Desarrollador Web Full Stack JAVA ',
            'description'=>'  he desarrollado tanto de la parte del front-end (cliente) como del back-end (servidor) de una aplicación web utilizando la plataforma JAVA.',
            'logo_url'=>'',
            'color_hex'=>'#fcf4ff',
        ]);

        Service::create([
            'title'=> 'APIs Rest y Microservicios ',
            'description'=>' trabajo en el desarrollo de aplicaciones web que utilizan una arquitectura basada en microservicios.',
            'logo_url'=>'',
            'color_hex'=>'#fcf4ff',
        ]);

        Service::create([
            'title'=> 'Google AppScript ',
            'description'=>' Un programador que entiende Google Apps Script es capaz de desarrollar soluciones personalizadas dentro del ecosistema de Google.',
            'logo_url'=>'',
            'color_hex'=>'#fcf4ff',
        ]);




    }
}
