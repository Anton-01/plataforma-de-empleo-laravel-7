<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiencias')->insert([
            'experiencia' => '0 - 6 Meses',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiencias')->insert([
            'experiencia' => '6 Meses - 1 año',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiencias')->insert([
            'experiencia' => '1 - 3 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiencias')->insert([
            'experiencia' => '3 - 5 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiencias')->insert([
            'experiencia' => '5 - 7 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiencias')->insert([
            'experiencia' => '7 - 10 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiencias')->insert([
            'experiencia' => '10 - 12 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiencias')->insert([
            'experiencia' => '12 - 15 años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
