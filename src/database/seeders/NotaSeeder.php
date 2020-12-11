<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nota;
use DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->delete(); 
        // Registros a la tabla notas
        Nota::create(array('titulo' => 'Tarea en casa', 'descripcion'=>'Lavar los platos', 'usuario_id'=>3));

        Nota::create(array('titulo' => 'Tarea en el trabajo', 'descripcion'=>'LLamar al paciente Edison Moran', 'usuario_id'=>1));

        Nota::create(array('titulo' => 'Tarea en la iglesia', 'descripcion'=>'Mantenimiento de las instalaciones de la iglesia', 'usuario_id'=>3));
        
        
    }
}
