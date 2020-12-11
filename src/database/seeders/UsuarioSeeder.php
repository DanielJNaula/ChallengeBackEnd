<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->delete(); 
        // Registros a la tabla usuario
        Usuario::create(array('nombre' => 'Gerardo Valverde', 'direccion'=>'Sangolqui - San Sebastian', 'descripcion'=>'Doctor, apasionado por el cuidado de ancian@s'));
        
        Usuario::create(array('nombre' => 'Paulina Moreno', 'direccion'=>'Batan - Canal 8', 'descripcion'=>'Veterinaria, apasionado por el cuidado de animales'));

        Usuario::create(array('nombre' => 'Daniel Naula', 'direccion'=>'Chillogallo - Buenaventura', 'descripcion'=>'Ing. en sistemas, apasionado por la programacion'));
    }
}
