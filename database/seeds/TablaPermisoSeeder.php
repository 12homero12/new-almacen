<?php

use App\Models\Permisos;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permisos::class)->times(5)->create();
        //
    }
}
