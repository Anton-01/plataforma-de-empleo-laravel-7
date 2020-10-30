<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salarios')->insert([
            'salario' => '0 - 3,000.00 MX',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('salarios')->insert([
            'salario' => '3,000.00 - 5,000.00 MX',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('salarios')->insert([
            'salario' => '5,000.00 - 8,000.00 MX',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('salarios')->insert([
            'salario' => '8,000.00 - 10,000 MX',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('salarios')->insert([
            'salario' => '10,000.00 - 14,000 MX',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('salarios')->insert([
            'salario' => '14,000.00 - 17,000 MX',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('salarios')->insert([
            'salario' => 'Salario no mostrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
