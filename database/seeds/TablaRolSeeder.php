<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // creamos un array para los diferentes roles
        $rols=[
            'administrador',
            'editor',
            'supervisor'
        ];
        //declaramos un array para insertar los valores
        foreach ($rols as $key => $value) {
            DB::table('rol')->insert([
                'nombre'=>$value,
                'created_at'=>Carbon::now()->format('Y-m-s H:i:s')
            ]);
        }
    }
}
