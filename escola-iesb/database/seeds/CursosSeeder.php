<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            ['nome'=>'ADS', 'duracao'=>5],
            ['nome'=>'DIREITO', 'duracao'=>4],
            ['nome'=>'Enfermagem', 'duracao'=>4],

        ]);
    }
}
