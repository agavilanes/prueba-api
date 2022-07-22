<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('tb_departamentos')->truncate();
        DB::table('tb_cargos')->truncate();

        DB::table('tb_departamentos')->insert([
            'codigo' => 'DEP 001',
            'nombre' => 'Tecnologías de la información',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);

        DB::table('tb_departamentos')->insert([
            'codigo' => 'DEP 002',
            'nombre' => 'Legal',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);

        DB::table('tb_departamentos')->insert([
            'codigo' => 'DEP 003',
            'nombre' => 'Seguridad',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);

        DB::table('tb_departamentos')->insert([
            'codigo' => 'DEP 003',
            'nombre' => 'Eventos y Buffets',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);

        DB::table('tb_cargos')->insert([
            'codigo' => 'CG 001',
            'nombre' => 'Administrador',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);

        DB::table('tb_cargos')->insert([
            'codigo' => 'CG 002',
            'nombre' => 'Lider FrontEnd',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);


        DB::table('tb_cargos')->insert([
            'codigo' => 'CG 003',
            'nombre' => 'Desarrollador FrontEnd',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);

        DB::table('tb_cargos')->insert([
            'codigo' => 'CG 004',
            'nombre' => 'Abogado',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);

        DB::table('tb_cargos')->insert([
            'codigo' => 'CG 005',
            'nombre' => 'Guardia',
            'activo' => '1',
            'idUsuarioCreacion' => 1

        ]);


    }
}
