<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'nombre' => 'Arica',
                'id_province' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Putre',
                'id_province' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Iquique',
                'id_province' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Colchane',
                'id_province' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Antofagasta',
                'id_province' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Calama',
                'id_province' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Chañaral',
                'id_province' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Copiapó',
                'id_province' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'San Antonio',
                'id_province' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Valparaíso',
                'id_province' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Puente Alto',
                'id_province' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Conchalí',
                'id_province' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Independencia',
                'id_province' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Las Condes',
                'id_province' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Maipú',
                'id_province' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Providencia',
                'id_province' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Quinta Normal',
                'id_province' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Renca',
                'id_province' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Santiago',
                'id_province' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Doñihue',
                'id_province' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Chimbarongo',
                'id_province' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Linares',
                'id_province' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Talca',
                'id_province' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Portezuelo',
                'id_province' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'San Carlos',
                'id_province' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Nacimiento',
                'id_province' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'Concepción',
                'id_province' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
