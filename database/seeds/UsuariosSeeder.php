<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Markus piedra',
            'email' => 'markuspiedra@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('markuspiedra@gmail.com'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Marco Aurelio',
            'email' => 'marco.aurelio@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('marco.aurelio@gmail.com'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
