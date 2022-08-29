<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('streets')->insert([
            [
                'calle' => 'Soldado Olivares',
                'id_city' => 1,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Francisco Puga',
                'id_city' => 1,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Carrera',
                'id_city' => 2,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Latorre',
                'id_city' => 2,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Los Pepinos',
                'id_city' => 3,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Colón',
                'id_city' => 3,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Calle Puerto Varas',
                'id_city' => 4,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Ruta A-959',
                'id_city' => 4,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Los Topacios',
                'id_city' => 5,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Gandarillas',
                'id_city' => 5,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'España',
                'id_city' => 6,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Puritama',
                'id_city' => 6,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Conchuela',
                'id_city' => 7,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Covadonga',
                'id_city' => 7,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Bognanic',
                'id_city' => 8,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Juan López',
                'id_city' => 8,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Faro Evangelistas',
                'id_city' => 10,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Hakairi',
                'id_city' => 10,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Patricio Lynch',
                'id_city' => 10,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Alfa',
                'id_city' => 11,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Lazio Sur',
                'id_city' => 11,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Los Canarios',
                'id_city' => 11,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Pasaje Las Tencas',
                'id_city' => 11,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Atenas',
                'id_city' => 14,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Azapa',
                'id_city' => 14,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Ana Luisa Prats',
                'id_city' => 16,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Bering',
                'id_city' => 16,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'El Comendador',
                'id_city' => 16,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Agata',
                'id_city' => 18,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Los Artesanos',
                'id_city' => 18,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Maiten',
                'id_city' => 18,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Avenida Portales',
                'id_city' => 19,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Doctor Brunner',
                'id_city' => 19,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Eyzaguirre',
                'id_city' => 19,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Galvarino',
                'id_city' => 19,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Las Fucsias',
                'id_city' => 19,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Moneda',
                'id_city' => 19,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Teresa Clark',
                'id_city' => 19,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Calle 27 Oriente',
                'id_city' => 23,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Buchupureo',
                'id_city' => 25,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Los Mardoños',
                'id_city' => 26,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Barros Arana',
                'id_city' => 27,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Carrera',
                'id_city' => 27,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Maipu',
                'id_city' => 27,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'San Martin',
                'id_city' => 27,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'calle' => 'Freire',
                'id_city' => 27,
'numero' => 0,                
'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
