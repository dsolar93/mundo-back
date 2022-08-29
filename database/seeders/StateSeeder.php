<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'nombre' => 'Región de Arica y Parinacota',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Tarapacá',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Antofagasta',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Atacama',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Valparaíso',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región Metropolitana de Santiago',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,[
                'nombre' => 'Región de OHiggins',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región del Maule',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Ñuble',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región del Biobío',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de La Araucanía',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Los Ríos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Los Lagos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Aysén',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Región de Magallanes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]        
        ]);
    }
}
