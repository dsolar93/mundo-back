<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            [
                'nombre' => 'Provincia de Arica',
                'id_state' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Provincia de Parinacota',
                'id_state' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Iquique',
                'id_state' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'El Tamarugal',
                'id_state' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Antofagasta',
                'id_state' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'El Loa',
                'id_state' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,[
                'nombre' => 'Chañaral',
                'id_state' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Copiapó',
                'id_state' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'San Antonio',
                'id_state' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Valparaíso',
                'id_state' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Cordillera',
                'id_state' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Santiago',
                'id_state' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Cachapoal',
                'id_state' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Colchagua',
                'id_state' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Linares',
                'id_state' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Talca',
                'id_state' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Itata',
                'id_state' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Punilla',
                'id_state' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Biobío',
                'id_state' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Concepción',
                'id_state' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
