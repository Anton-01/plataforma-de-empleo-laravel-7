<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicacions')->insert([
            'ubicacion' => 'Remoto',
            'slug' => 'remoto',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'ubicacion' => 'USA',
            'slug' => 'usa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'ubicacion' => 'México',
            'slug' => 'mexico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'ubicacion' => 'Canada',
            'slug' => 'canada',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'ubicacion' => 'Colombia',
            'slug' => 'colombia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'ubicacion' => 'Argentina',
            'slug' => 'argentina',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubicacions')->insert([
            'ubicacion' => 'España',
            'slug' => 'espana',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
