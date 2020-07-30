<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Front End',
            'slug' => 'front-end',
            'descripcion' => 'Desarrollo Front End',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Back End',
            'slug' => 'back-end',
            'descripcion' => 'Desarrollo Back End',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Full Satck',
            'slug' => 'full-stack',
            'descripcion' => 'Desarrollo Full Satck',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'DevOps',
            'slug' => 'devops',
            'descripcion' => 'Desarrollo devops',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'DBA',
            'slug' => 'dba',
            'descripcion' => 'Desarrollo dba',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'UU / UX',
            'slug' => 'ui-ux',
            'descripcion' => 'Desarrollo ui / ux',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'TeachLead',
            'slug' => 'teachlead',
            'descripcion' => 'Desarrollo teachlead',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
