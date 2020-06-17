<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TablaRolSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol=[
            'administrador',
            'usuario',
            'cliente'
        ];
        $estado=1;
        foreach($rol as $key =>$value)
        {
            DB::table('rol')->insert([
                'nombre' => $value,
                'estado'=>$estado,
                'created_at'=>Carbon::now()
            ]);            
        }
    }
}
